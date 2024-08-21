@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
    <h1 class="mb-4">Blogi</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Lisa postitus</a>
    
    @if($posts->count() > 0)
        @foreach($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($post->content, 100) }}</p>
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid mb-3" style="max-width: 300px;">
                    @endif
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-outline-primary">Loe rohkem</a>
                </div>
            </div>
        @endforeach
    @else
        <p>No posts found.</p>
    @endif
@endsection