<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PostController extends Controller
{
    use AuthorizesRequests;

    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $updatedPosts = Post::where('status', 'scheduled')
            ->where('published_at', '<=', now())
            ->update(['status' => 'published']);

        $posts = Post::where('user_id', Auth::id())->paginate(10);
        return view('home', compact('posts'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::whereNotIn('status', ['Draft', 'Scheduled'])->paginate(10);  
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $posts = Post::where('user_id', Auth::id())->get();
        return view('posts.create', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $posts = new Post();
        $posts->user_id = Auth::id();
        $posts->title = $request->title;
        $posts->content = $request->content;

        $publishedAt = $request->published_at;
        $today = now();

        if ($request->has('is_draft')) {
            $posts->status = 'draft';
        } elseif ($publishedAt && $publishedAt > $today) {
            $posts->status = 'scheduled';
        } else {
            $posts->status = 'published';
        }

        $posts->published_at = $publishedAt;

        $posts->save();

        return redirect()->route('home')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::with('user')->findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        // dd($post->published_at);
        return view('posts.edit', compact('post'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->published_at = $request->published_at;
        $post->status = $request->has('is_draft') ? 'draft' : 'published';
        $post->published_at = $request->published_at;

        $post->save();

        return redirect()->route('home')->with('success', 'Post created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }
        
        $post->delete();

        return redirect()->route('home')->with('success', 'Post deleted successfully!');
    }
}
