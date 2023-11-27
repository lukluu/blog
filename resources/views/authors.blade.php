@extends('layouts.main')

@section('container')
<h1>halaman {{ $title }}</h1>
@foreach ($authors as $author)
<h1><a href="/authors/{{ $author->username }}">{{ $author->name }}</a></h1>
@endforeach
@endsection