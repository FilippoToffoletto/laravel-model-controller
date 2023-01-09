@extends('layout.main')

@section('content')
    <h1>Elenco Film</h1>

    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-4 d-flex justify-content-center py-4">
            <a href="{{ route('movieDetail', $movie->id) }}">
                <div class="card" style="width: 18rem;">
                    <img src="{{ Vite::asset('resources/images/movie-slogan.webp') }}" class="card-img-top"
                        alt="logo">
                    <div class="card-body">
                        <h5 class="card-title text-center text-uppercase py-2 fw-bold">{{ $movie->original_title }}
                        </h5>
                        <p class="card-text text-center fw-light">&#127470;&#127481; {{ $movie->title }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
@endsection
