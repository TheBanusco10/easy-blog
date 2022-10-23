<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Show specific post
     *
     * @param $post_slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($post_slug)
    {
        $post = Post::where('post_slug', '=', $post_slug)->first();

        return view('posts/show-post', [
            'post' => $post
        ]);
    }

    /**
     * Show create post view
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function createView()
    {
        return view('posts/create-post');
    }

    /**
     * Show edit post view
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editView(Post $post)
    {
        return view('posts/edit-post', [
            'post' => $post
        ]);
    }

    /**
     * Create a new post
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        $request->validate([
            'post_title' => 'required|max:255',
            'post_slug'  => 'required|unique:App\Models\Post,post_slug|max:255'
        ]);

        $post = Post::create([
            'post_title'   => $request->post_title,
            'post_slug'    => $request->post_slug,
            'post_image'   => $request->post_image,
            'user_id'      => Auth::id(),
            'post_content' => $request->post_content,
        ]);

        return redirect()->route('dashboard');
    }

    /**
     * Edit a post
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit(Request $request, $id)
    {
        dd($id);
        $request->validate([
            'post_title' => 'required|max:255',
            'post_slug'  => 'required|unique:App\Models\Post,post_slug|max:255'
        ]);

        Post::where('id', $id)->update($request->all());

        return redirect()->route('dashboard');
    }

    /**
     * Remove post
     *
     * @param  Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Post $post)
    {
        $post->delete();

        return redirect()->route('dashboard');
    }
}
