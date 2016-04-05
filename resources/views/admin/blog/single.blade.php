@extends('layouts.admin-master')

@section('content')

<div class="container">
    <section id="post-admin">
        <a href="{{ route('admin.blog.post.edit',['post_id' => $post->id]) }}">Edit Post</a>
        <a href="{{ route('admin.blog.post.delete',['post_id' => $post->id]) }}">Delete Post</a>
    </section>
    <section id="post">
        <h1>{{ $post->title }}</h1>
        <span class="info">{{ $post->author }} | {{ $post->created_at }}</span>
        <br>
        @foreach($post->categories as $post_category)
                <a>{{ $post_category->name }}</a>
        @endforeach
        <p> {{ $post->body }}</p>
    </section>
</div>

@endsection