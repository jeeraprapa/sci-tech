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
        $categories = BlogCategory::where('status', 1)->get();
        $categories = $categories->pluck('name', 'id');

        return view('admin::blogs.create')->with('categories', $categories);
    }

    public function store(StoreBlogRequest $request)
    {
        $data = $request->all();

        $editor = new Editor();
        $data['description'] = $editor->uploadImage($data['description']);
        $data['short_description'] = $editor->uploadImage($data['short_description']);

        Blog::create($data);

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.blog.index');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        $categories = BlogCategory::where('status', 1)->get();
        $categories = $categories->pluck('name', 'id');

        return view('admin::blogs.edit')->with('blog', $blog)->with('categories', $categories);
    }

    public function update(UpdateBlogRequest $request, $id)
    {
        $data = $request->all();

        $blog = Blog::findOrFail($id);

        $editor = new Editor();
        $data['description'] = $editor->uploadImage($data['description']);
        $data['short_description'] = $editor->uploadImage($data['short_description']);

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

    public function media(Blog $blog)
    {
        return view('admin::blogs.media')->with('blog', $blog);
    }

    public function mediaStore(Request $request, Blog $blog)
    {
        if($request->hasFile('file') && $request->file('file')->isValid()){
            $media = $blog->addMediaFromRequest('file')
                ->toMediaCollection('images');

            return response()->json([
                'id' => $media->id,
            ]);
        }
    }

    public function mediaThumbnail(Request $request, Blog $blog, $id)
    {
        $mediaItems = $blog->getMedia('images');
        foreach($mediaItems as $mediaItem){
            $mediaItem->forgetCustomProperty('thumbnail');
            $mediaItem->save();
        }

        $mediaItem = $blog->getMedia('images')->where('id', $id)->first();
        $mediaItem->setCustomProperty('thumbnail', 'true');
        $mediaItem->save();

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.blog.media', ['blog' => $blog->id]);
    }

    public function mediaDestroy(Request $request, Blog $blog, $id)
    {
        $mediaItem = $blog->getMedia('images')->where('id', $id)->first();
        $mediaItem->delete();

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.blog.media', ['blog' => $blog->id]);
    }
}
