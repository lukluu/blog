@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0, 0.7)">
                    <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
                </div>
                <img src="https://source.unsplash.com/400x300?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->judul }} </h5>
                    <p>by. <a href="/authors/{{ $post->author->username }}">{{$post->author->name}}</a></p>
                    <p class="card-text"><small class="text-body-secondary"> {{ $post->created_at->diffForHumans() }} </small></p>
                    <p class="card-text">{{ $post->excerpt }} </p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection