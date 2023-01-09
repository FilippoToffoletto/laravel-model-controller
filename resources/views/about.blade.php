@extends('layout.main')

@section('content')
    <h1></h1>

    <div class="p-5 mb-4 rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">There is nothing for you here</h1>
            <p class="col-md-8 fs-4">Click the button below</p>
            <button class="btn btn-light btn-lg" type="button">
                <a href="{{ route('lista-films')}}" class="text">Film list</a>
            </button>
        </div>
    </div>
@endsection
