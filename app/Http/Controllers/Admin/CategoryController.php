<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category'         => 'required|string|max:255',
            'description'      => 'nullable|string',
            'image'            => 'nullable|image|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $data = $request->only([
            'category',
            'description',
            'meta_title',
            'meta_description',
        ]);

        // Slug only on create
        $data['slug'] = Str::slug($request->category);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('category_images', $filename, 'public');
            $data['image'] = $filename;
        }

        Category::create($data);

        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'category'         => 'required|string|max:255',
            'description'      => 'nullable|string',
            'image'            => 'nullable|image|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $data = $request->only([
            'category',
            'description',
            'meta_title',
            'meta_description',
        ]);

        // slug NOT updated on edit (kept permanent)

        if ($request->hasFile('image')) {
            if ($category->image && Storage::disk('public')->exists('category_images/' . $category->image)) {
                Storage::disk('public')->delete('category_images/' . $category->image);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('category_images', $filename, 'public');
            $data['image'] = $filename;
        }

        $category->update($data);

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if ($category->image && Storage::disk('public')->exists('category_images/' . $category->image)) {
            Storage::disk('public')->delete('category_images/' . $category->image);
        }

        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }

    public function toggleStatus($id)
    {
        $category = Category::findOrFail($id);
        $category->status = $category->status == 1 ? 0 : 1;
        $category->save();

        return redirect()->back()->with('success', 'Category status updated.');
    }
}
