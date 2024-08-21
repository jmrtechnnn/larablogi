@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="card">
        <div class="card-body">
        <h1 class="card-title">{{ $post->title }}</h1>
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid mb-3">
            @endif
            <p class="card-text">{{ $post->content }}</p>
            <a href="{{ route('posts.index') }}" class="btn btn-primary">Pealehele</a>
        </div>
    </div>
@endsection