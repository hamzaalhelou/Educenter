<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\NewUserNotification;
use Illuminate\Support\Facades\Notification;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest('id')->paginate(6);
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $post= Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        $users = User::all();
        $user_create = auth()->user()->name;
        Notification::send($users, new NewUserNotification($post->id,$user_create,$post->title,$post->body));
        return redirect()
        ->route('admin.posts.index')
        ->with('msg',__('admin.Posts added successfully'))
        ->with('type', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        $users = User::all();
        $user_create = auth()->user()->name;
        Notification::send($users, new NewUserNotification($post->id,$user_create,$post->title,$post->body));


        return redirect()
        ->route('admin.posts.index')
        ->with('msg',__('admin.Post updated successfully'))
        ->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy($id);

        return redirect()
        ->route('admin.posts.index')
        ->with('msg',__('admin.Post deleted successfully'))
        ->with('type', 'error');
    }
}
