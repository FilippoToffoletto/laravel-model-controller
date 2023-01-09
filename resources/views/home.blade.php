@extends('layout.main')

@section('content')

    <div class="p-5 mb-4 rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Welcome in Model Controller di laravel</h1>
            <p class="col-md-8 fs-4">Click the button below to see the films list with modal controller</p>
            <button class="btn btn-light btn-lg" type="button">
                <a href="{{ route('lista-films')}}" class="text">Film list</a>
            </button>
        </div>
    </div>

@endsection
