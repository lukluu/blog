@extends('layouts.main')

@section('container')
<h1>halaman Category Post: {{$category}}</h1>
@foreach ($posts as $post)
<article class="mb-5">
    <h2><a href="/posts/{{ $post->slug }}">{{ $post->judul }} </a></h2>
    <p> {{ $post->excerpt }} </p>
</article>
@endforeach
@endsection