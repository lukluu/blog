@extends('layouts.main')

@section('container')
<div class="card text-bg-dark">
    <img src="{{ $gambar }}" class="card-img opacity-25" alt="...">
    <div class="card-img-overlay d-flex justify-content-center align-item-center flex-column">
        <h1 class="card-title text-center">Dashboard</h1>
        <p class="card-text text-center mb-5">{{ $text }}</p>
        <div class="row d-flex justify-content-center align-item-center">
            <button type="button" class="btn btn-info col-4">
                <a href="/posts" class="text-decoration-none text-dark">Mulai Membaca</a>
            </button>
        </div>


    </div>
</div>
@endsection