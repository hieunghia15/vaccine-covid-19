<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class IndexController extends Controller
{
    public function  __construct(Category $categoryModel, Post $postModel)
    {
        $this->categories = $categoryModel;
        $this->posts = $postModel;
    }
    public function index()
    {
        $categories = $this->categories->all();
        return view('guest.index', compact('categories'));
    }
    public function indexPost()
    {
        $categories = $this->categories->all();
        $posts = $this->posts->take(12)->get();
        $posts_first = $this->posts->latest()->first();
        return view('guest.blog.index', compact('categories', 'posts', 'posts_first'));
    }
    public function categoryPost($category_slug)
    {
        $categories = $this->categories->where('category_slug', $category_slug)->first();
        $category_id = $this->categories->where('category_slug', $category_slug)->first()->id;
        $posts = $this->posts
            ->where('is_actived', 1)
            ->where('category_id', $category_id)
            ->get();
        $post_new = $this->posts
            ->where('is_actived', 1)
            ->where('category_id', $category_id)
            ->latest()->first();
        return view('guest.blog.blog', compact('categories', 'posts', 'post_new'));
    }
    public function readPost($post_slug)
    {
        $posts = $this->posts->where('is_actived', 1)
            ->where('post_slug', $post_slug)
            ->first();
        $post_recents = $this->posts->inRandomOrder()->take(4)->get();
        return view('guest.blog.blog-detail', compact('posts', 'post_recents'));
    }
    public function search(Request $request)
    {
        $search = $_GET['search'];
        $categories = $this->categories->all();
        $posts = Post::with('category')
            ->where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('description', 'LIKE', '%' . $search . '%')
            ->paginate(20);
        $count_post = count($posts);
        return view('guest.blog.search-result', compact('posts', 'count_post', 'search'));
    }
}