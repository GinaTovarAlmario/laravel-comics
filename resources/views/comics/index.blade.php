@extends("layouts.app")

@section("page-title", "Comics")


@section("main-content")
<section class="container-fluid" id="jumbotron">
    <div class="row">
        <div class="col g-0">
            <div class="jumbo-img">
                <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
            </div>
        </div>
    </div>
</section>
<section id="comics" class="bg-dark pt-4">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($comics as $comic )
                <div class="col-2 mb-3">
                    <div class="card box text-white border border-0 ">
                            <img src="{{ $comic["thumb"] }}" class="card-img-top box-img rounded-0" alt="{{ $comic["title"] }}">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $comic["title"] }}
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section id="shop">
    <div></div>

</section>
@endsection
