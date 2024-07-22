<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('adminDashboard.index', compact('posts'));
    }

    public function indexHalaman()
    {
        $posts = Post::latest()->take(3)->get();
        return view('index', compact('posts'));
    }

    public function blog()
    {
        $posts = Post::latest()->get();
        return view('blog', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminDashboard.tambahPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = date('YmdHis').'.'.$request->image->extension();
        $imageNamePath = 'images/'.$imageName;

        Storage::putFileAs('public/', $request->image, $imageNamePath);
        $validate['image'] = $imageNamePath;

        // slug
        $slug = Str::slug($request->title, '-');

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageNamePath,
            'slug' => $slug,
        ]);

        return redirect()->route('dashboard')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    public function showDetail($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('detailBlog', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post, $slug)
    {
        // Direct into edit page
        $post = Post::where('slug', $slug)->first();
        return view('adminDashboard.editPost', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post, $slug)
    {
        // Find the post
        $post = Post::where('slug', $slug)->first();

        // Validate the request data
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Check if an image file is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($post->image) {
                Storage::delete('public/' . $post->image);
            }

            // Store the new image
            $imageName = date('YmdHis') . '.' . $request->image->extension();
            $imageNamePath = 'images/' . $imageName;
            Storage::putFileAs('public/', $request->image, $imageNamePath);

            // Set the image path for the update
            $post->image = $imageNamePath;
        }

        // Update the slug if the title has changed
        $newSlug = Str::slug($request->title, '-');
        if ($newSlug !== $post->slug) {
            $post->slug = $newSlug;
        }

        // Update the post data
        $post->title = $request->title;
        $post->content = $request->content;

        // Save the updated post
        $post->save();

        // Redirect with a success message
        return redirect()->route('dashboard')
            ->with('success', 'Post updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post, $slug)
    {
        // Delete
        $post = Post::where('slug', $slug)->first();
        Storage::delete('public/'.$post->image);
        $post->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Post deleted successfully.');
    }
}
