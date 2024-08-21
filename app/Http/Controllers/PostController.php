<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
       
        return view('posts.index', compact('posts'));
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $validatedData = $validator->validated();
            
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('post_images', 'public');
                $validatedData['image'] = $imagePath;
            }
        
            $post = Post::create($validatedData);
        
            return redirect()->route('posts.index')->with('success', 'Post created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'An error occurred while creating the post: ' . $e->getMessage())
                ->withInput();
        }
    }
    
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
