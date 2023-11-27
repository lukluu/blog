@extends('layouts.main')

@section('container')
<h1 class="text-center">Halaman {{ $title }}</h1>
@foreach ($authors as $author)
<div class="list-group">
  <a href="/authors/{{ $author->username }}" class="list-group-item list-group-item-action">{{ $author->name }}</a>
</div>
@endforeach
@endsection