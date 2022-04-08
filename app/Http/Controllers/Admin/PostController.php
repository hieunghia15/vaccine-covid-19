<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Auth;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  __construct(Post $postModel, Category $categoryModel)
    {
        $this->posts = $postModel;
        $this->categories = $categoryModel;
    }

    public function index()
    {
        $posts = $this->posts->all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categories->all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'content' => ['required'],
            'thumbnail' => ['required', 'image'],
            'is_actived' => ['required', 'string'],
            'post_slug' => ['required', 'string'],
            'category_id' => ['required', 'string'],
            'user_id' => ['required', 'string'],

        ]);
        $posts = $this->posts->create($validated_data);
        //Upload image
        $get_image = $request->thumbnail;
        $path = 'post/';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
        $get_image->move($path, $new_image);
        $posts->thumbnail = $path . $new_image;
        $posts->save();
        return redirect()->route('admin.posts.index')->with('status', 'Tạo bài viết thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = $this->posts->findOrFail($id);
        return view('admin.posts.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = $this->posts->findOrFail($id);
        $category_id = $posts->category_id;
        $categories = $this->categories->with('posts')->where('id', '<>', $category_id)->get();
        return view('admin.posts.edit', compact('posts', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated_data = $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'content' => ['required'],
            'thumbnail' => ['required', 'image'],
            'is_actived' => ['required', 'string'],
            'post_slug' => ['required', 'string'],
            'category_id' => ['required', 'string'],
            'user_id' => ['required', 'string'],

        ]);
        $posts = $this->posts->findOrFail($id);
        $posts->update($validated_data);
        //Upload image
        $get_image = $request->thumbnail;
        if ($get_image) {
            $path = 'post/' . $posts->thumbnail;
            if (file_exists($path)) {
                @unlink($path);
            }
            $path = 'post/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $posts->thumbnail = $path . $new_image;
        }
        $posts->save();
        return redirect()->route('admin.posts.index')->with('status', 'Cập nhật bài viết thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = $this->posts->findOrFail($id);
        return view('admin.posts.destroy', compact('posts'));
    }
    public function delete(Request $request, $id)
    {
        $posts = $this->posts->findOrFail($id);
        $thumbnail = $posts->thumbnail;
        $path = 'post/' . $posts->thumbnail;
        if (file_exists($path)) {
            @unlink($path);
        }
        $posts->where('thumbnail', $thumbnail)->delete();
        $posts->delete();
        return redirect()->route('admin.posts.index')->with('status', 'Xóa bài viết thành công');
    }
}