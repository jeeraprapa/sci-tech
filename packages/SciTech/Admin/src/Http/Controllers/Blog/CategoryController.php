<?php

namespace SciTech\Admin\Http\Controllers\Blog;

use SciTech\Admin\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SciTech\Admin\Http\Requests\Blog\StoreBlogCategoryRequest;
use SciTech\Admin\Http\Requests\Blog\UpdateBlogCategoryRequest;
use SciTech\Admin\Models\Blog;
use SciTech\Admin\Models\BlogCategory;
use SciTech\Admin\Service\Editor;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = BlogCategory::paginate(10);

        return view('admin::blogs.categories.index')->with('categories', $categories);
    }

    public function create()
    {
        return view('admin::blogs.categories.create');
    }

    public function store(StoreBlogCategoryRequest $request)
    {
        $data = $request->all();

        $editor = new Editor();
        $data['description'] = $editor->uploadImage($data['description']);

        BlogCategory::create($data);

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.blog.category.index');
    }

    public function edit($id)
    {
        $category = BlogCategory::findOrFail($id);

        return view('admin::blogs.categories.edit')->with('category', $category);
    }

    public function update(UpdateBlogCategoryRequest $request, $id)
    {
        $data = $request->all();

        $category = BlogCategory::findOrFail($id);

        $editor = new Editor();
        $data['description'] = $editor->uploadImage($data['description']);

        $category->fill($data)->saveOrFail();

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.blog.category.index');
    }

    public function destroy(Request $request, $id)
    {
        $blogs = Blog::where('category_id', $id)->get();
        if (!$blogs->isEmpty()) {
            $request->session()->flash('status', 'danger');
            $request->session()->flash('message', 'ไม่สามารถลบประเภทบล็อกนี้ได้เนื่องจากถูกใช้งานไปแล้ว');
            return redirect()->route('admin.blog.category.index');
        }

        $category = BlogCategory::findOrFail($id);
        $category->delete();

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.blog.category.index');
    }
}
