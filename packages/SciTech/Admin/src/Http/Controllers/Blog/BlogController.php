<?php

namespace SciTech\Admin\Http\Controllers\Blog;

use SciTech\Admin\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SciTech\Admin\Http\Requests\Blog\StoreBlogRequest;
use SciTech\Admin\Http\Requests\Blog\UpdateBlogRequest;
use SciTech\Admin\Models\Blog;
use SciTech\Admin\Models\BlogCategory;
use SciTech\Admin\Service\Editor;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(10);

        return view('admin::blogs.index')->with('blogs', $blogs);
    }

    public function create()
    {
        $categories = BlogCategory::all();
        $categories = $categories->pluck('name', 'id');

        return view('admin::blogs.create')->with('categories', $categories);
    }

    public function store(StoreBlogRequest $request)
    {
        Blog::create($request->all());

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.blog.index');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        $categories = BlogCategory::all();
        $categories = $categories->pluck('name', 'id');

        return view('admin::blogs.edit')->with('blog', $blog)->with('categories', $categories);
    }

    public function update(UpdateBlogRequest $request, $id)
    {
        $data = $request->all();
        $blog = Blog::findOrFail($id);
        $editor = new Editor();
        $data['description'] = $editor->uploadImage($data['description']);
        $blog->fill($data)->saveOrFail();

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.blog.index');
    }

    public function destroy(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.blog.index');
    }
}
