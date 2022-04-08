<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('index', compact('posts'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Post::create($request->all());

        return to_route('index');
    }

    public function show(Request $request) {
        return $request->post;
    }

    public function edit($id) {
        $post = Post::find($id);

        return view('edit', compact('post'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post = Post::find($id);

        $post->title = $request->title;
        $post->content = $request->content;

        $post->save();

        return to_route('index');
    }

    public function destroy($id) {
        $post = Post::find($id);

        $post->delete();

        return to_route('index');
    }
}
