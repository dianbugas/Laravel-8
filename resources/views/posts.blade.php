@extends('layout.main')

@section('container')
    <h1>Halaman blogs</h1>
    @foreach ($posts as $post)
        <article>
            <h2><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
