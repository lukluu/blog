@extends('layouts.main')

@section('container')
@foreach ($more as $more)
<h1> {{ $more->nama }}</h1>
<h1> {{ $more->nim }}</h1>
<h1> {{ $more->jurusan }}</h1>
@endforeach
@endsection