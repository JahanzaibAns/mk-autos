<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading'             => 'required|string|max:255',
            'slug'             => 'required|string|max:255|unique:blogs,slug',
            'description'      => 'nullable|string',
            'image'            => 'nullable|image|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $data = $request->only([
            'heading',
            'slug',
            'description',
            'meta_title',
            'meta_description',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('blog_images', $filename, 'public');
            $data['image'] = $filename;
        }

        Blog::create($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'heading'          => 'required|string|max:255',
            'slug'             => [
                'required',
                'string',
                'max:255',
                Rule::unique('blogs', 'slug')->ignore($id),
            ],
            'description'      => 'nullable|string',
            'image'            => 'nullable|image|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $data = $request->only([
            'heading',
            'slug',
            'description',
            'meta_title',
            'meta_description',
        ]);

        if ($request->hasFile('image')) {
            if ($blog->image && Storage::disk('public')->exists('blog_images/' . $blog->image)) {
                Storage::disk('public')->delete('blog_images/' . $blog->image);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('blog_images', $filename, 'public');
            $data['image'] = $filename;
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image && Storage::disk('public')->exists('brand_images/' . $blog->image)) {
            Storage::disk('public')->delete('brand_images/' . $blog->image);
        }

        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
