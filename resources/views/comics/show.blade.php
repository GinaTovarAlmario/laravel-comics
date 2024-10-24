@extends('layouts.app')
@section('page-title', 'Comics')
@section('main-content')
    <section id="comics" class="bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 mb-3">
                    <div class="card mb-4 bg-dark text-white">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title text-primary">
                                {{ $comic['title'] }}
                            </h5>
                            <p class="card-text">
                               <span class="fw-bold text-primary">Desrcrition: </span> {{ $comic['description'] }}
                            </p>
                            <p class="card-text">
                               <span class="fw-bold text-primary">Price: </span>{{ $comic['price'] }}
                            </p>
                            <p class="card-text">
                                {{ $comic['series'] }}
                            </p>
                            <p class="card-text">
                                {{ $comic['sale_date'] }}
                            </p>
                            <p class="card-text">
                                {{ $comic['type'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
