@extends('layout.main')

@section('container')
    <h2>{{ $post->title }}</h2>
    <p>
        By Muhammad Ardiansuah in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
    <a href="/blog"></a>
@endsection


{{-- Post::create([
'title' => 'Judul Pertama',
'category_id' => 1,
'slug' => 'judul-pertama',
'excerpt' => 'lorem100asdasdasdasdasdasdasdasdasdsadsadasda',
'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt'
]) --}}
