<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\CarModel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ModelController extends Controller
{
    public function index()
    {
        $models = CarModel::orderBy('id', 'desc')->get();
        return view('admin.models.index', compact('models'));
    }

    public function create()
    {
        return view('admin.models.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_id'         => 'required|exists:brands,id', // Add this line
            'name'             => 'required|string|max:255',
            'description'      => 'nullable|string',
            'image'            => 'nullable|image|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $data = $request->only([
            'brand_id',
            'name',
            'description',
            'meta_title',
            'meta_description',
        ]);

        $data['slug'] = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('model_images', $filename, 'public');
            $data['image'] = $filename;
        }


        CarModel::create($data);

        return redirect()->route('admin.models.index')->with('success', 'Model created successfully.');
    }

    public function edit($id)
    {
        $model = CarModel::findOrFail($id);
        return view('admin.models.edit', compact('model'));
    }

    public function update(Request $request, $id)
    {
        $model = CarModel::findOrFail($id);

        $request->validate([
            'brand_id'         => 'required|exists:brands,id', // Add this line
            'name'             => 'required|string|max:255',
            'description'      => 'nullable|string',
            'image'            => 'nullable|image|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $data = $request->only([
            'brand_id',
            'name',
            'description',
            'meta_title',
            'meta_description',
        ]);

        // $data['slug'] = Str::slug($request->name);

        if ($request->hasFile('image')) {
            if ($model->image && Storage::disk('public')->exists('model_images/' . $model->image)) {
                Storage::disk('public')->delete('model_images/' . $model->image);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('model_images', $filename, 'public');
            $data['image'] = $filename;
        }


        $model->update($data);

        return redirect()->route('admin.models.index')->with('success', 'Model updated successfully.');
    }

    public function destroy($id)
    {
        $model = CarModel::findOrFail($id);

        if ($model->image && Storage::disk('public')->exists($model->image)) {
            Storage::disk('public')->delete($model->image);
        }

        $model->delete();

        return redirect()->route('admin.models.index')->with('success', 'Model deleted successfully.');
    }


    public function toggleStatus($id)
    {
        $model = CarModel::findOrFail($id);
        $model->status = $model->status == 1 ? 0 : 1;
        $model->save();

        return redirect()->back()->with('success', 'Model status updated.');
    }


}
