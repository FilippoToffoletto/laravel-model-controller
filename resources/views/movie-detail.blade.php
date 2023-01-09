@extends('layout.main')

@section('content')
    <div class="detail">
        <div class="card py-3 m-auto" style="width: 35rem;">
            <img src="{{ Vite::asset('resources/images/movie-slogan.webp') }}" class="card-img-top" alt="logo">
            <div class="card-body">
                <h5 class="card-title text-center text-uppercase py-2 fw-bold">{{ $movie->original_title }}
                </h5>
                <h5 class="card-text text-center"><strong>&#127470;&#127481; {{ $movie->title }}</strong></h5>

                <p class="card-text text-center fw-light text-uppercase"> <strong>Nation</strong></p>
                <h6 class="text text-uppercase text-center">{{ $movie->nationality }}</h6>
                <hr>
                <p class="card-text text-center fw-light text-uppercase"> <strong>Release</strong></p>
                <h6 class="text text-uppercase text-center">{{ $movie->date }}</h6>

                <p class="card-text text-center fw-light text-uppercase"> <strong>Vote</strong></p>
                <h6 class="text text-uppercase text-center">{{ $movie->vote }}</h6>
            </div>
        </div>
    </div>
@endsection
