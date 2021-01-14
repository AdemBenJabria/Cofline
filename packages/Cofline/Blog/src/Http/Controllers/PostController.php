<?php

namespace Cofline\Blog\Http\Controllers;


use App\Http\Controllers\Controller;
use Cofline\Blog\Http\Requests\PostRequest;
use Cofline\Blog\Models\Post;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return view('Cofline/Blog::Layout.void');
    }

    public function create(PostRequest $request)
    {
        $post = Post::create($request->validated());
    }

    public function update(PostRequest $request, int $id)
    {
        if ($request->validated()) {
            $post = Post::where('id', $id)->first();
            if ($post) {
                $post->category_id = $request->category_id;
                $post->title = $request->title;
                $post->content = $request->content;
                $post->is_published = $request->is_published;
                return $post->save();
            }
        }
    }
    public function destroy(int $id)
    {
        $request = Post::where('id', $id)->first()->delete();
        //$request->delete();

        //flash()->success('Post deleted.');

        //return redirect()->route('posts.index');
    }


    public function show()
    {
        //
    }


    public function edit()
    {
        //
    }
}
