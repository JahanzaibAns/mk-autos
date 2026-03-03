<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('id', 'desc')->get();
        return view('admin.brands.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'             => 'required|string|max:255',
            'description'      => 'nullable|string',
            'image'            => 'nullable|image|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $data = $request->only([
            'name',
            'description',
            'meta_title',
            'meta_description',
        ]);

        $data['slug'] = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('brand_images', $filename, 'public');
            $data['image'] = $filename;
        }


        Brand::create($data);

        return redirect()->route('admin.brands.index')->with('success', 'Brand created successfully.');
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.brands.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);

        $request->validate([
            'name'             => 'required|string|max:255',
            'description'      => 'nullable|string',
            'image'            => 'nullable|image|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $data = $request->only([
            'name',
            'description',
            'meta_title',
            'meta_description',
        ]);

        //$data['slug'] = Str::slug($request->name);

        if ($request->hasFile('image')) {
            if ($brand->image && Storage::disk('public')->exists('brand_images/' . $brand->image)) {
                Storage::disk('public')->delete('brand_images/' . $brand->image);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('brand_images', $filename, 'public');
            $data['image'] = $filename; // Only store filename in DB
        }


        $brand->update($data);

        return redirect()->route('admin.brands.index')->with('success', 'Brand updated successfully.');
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);

        if ($brand->image && Storage::disk('public')->exists($brand->image)) {
            Storage::disk('public')->delete($brand->image);
        }

        $brand->delete();

        return redirect()->route('admin.brands.index')->with('success', 'Brand deleted successfully.');
    }


    public function toggleStatus($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->status = $brand->status == 1 ? 0 : 1;
        $brand->save();

        return redirect()->back()->with('success', 'Brand status updated.');
    }


}
