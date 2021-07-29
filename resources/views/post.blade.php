@extends('layout.main')

@section('container')
    <h2>{{ $post->title }}</h2>
    <p>
        By <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in
        <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
    </p>

    {!! $post->body !!}
    <a href="/blog" class="text-decoration-none d-block mt-3"></a>
@endsection


{{-- Post::create([
'title' => 'Judul Pertama',
'category_id' => 1,
'slug' => 'judul-pertama',
'excerpt' => 'lorem100asdasdasdasdasdasdasdasdasdsadsadasda',
'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt'
]) --}}
