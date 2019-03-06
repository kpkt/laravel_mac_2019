<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('post.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'subject' => 'required',
            'content' => 'required',
        ]);

        $post = new Post();
        $post->category_id = $request->input('category_id');
        $post->subject = $request->input('subject');
        $post->content = $request->input('content');
        $post->is_draft = $request->input('is_draft') ?? 0;

        // Save and upload thumbnail

        $post->save();

        return redirect()->route('posts.index');
    }


    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::pluck('name', 'id');
        return view('post.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'subject' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($id);
        $post->category_id = $request->input('category_id');
        $post->subject = $request->input('subject');
        $post->content = $request->input('content');
        $post->is_draft = $request->input('is_draft') ?? 0;

        // Save and upload thumbnail

        $post->save();

        return redirect()->route('posts.index');
    }

    public function unpublished($id)
    {
        $post = Post::find($id);
        $post->published_at = null;
        $post->is_draft = 1;
        $post->save();

        return redirect()->route('posts.index');
    }
    
    public function publish($id)
    {
        $post = Post::find($id);
        $post->published_at = Carbon::now();
        $post->is_draft = 0;
        $post->save();

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
