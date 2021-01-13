<?php

namespace Cofline\Blog\Http\Controllers;

use App\Http\Controllers\Controller;
use Facade\FlareClient\View;

class PostController extends Controller
{
    public function test()
    {
        return view('Cofline/Blog::Layout.Layout');
    }

    public function index()
    {
        return view('Cofline/Blog::Layout.void');
    }

    /**public function store(Request $request)
    {
        // Validate posted form data
        $validated = $request->validate([
            'title' => 'required|string|unique:posts|min:5|max:100',
            'content' => 'required|string|min:5|max:2000',
            'category' => 'required|string|max:30'
        ]);

        // Create and save post with validated data
        $post = Post::create($validated);

        // Redirect the user to the created post with a success notification
        return redirect(route('posts.show', [$post->slug]))->with('notification', 'Post created!');
    }
    */
    public function create()
    {
        //show create post form
        return view('Cofline/Blog::posts.create');
    }

    public function show()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }

    public function edit()
    {
        //
    }
}
