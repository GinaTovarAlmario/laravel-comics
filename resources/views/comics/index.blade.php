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
<section id="comics" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col g-0">
                <button class="btn btn-primary current-series-button rounded-0">CURRENT SERIES</button>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($comics as $comic )
                <div class="col-2 mt-3 mb-3">
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
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center py-4">
                    <button class="btn btn-primary rounded-0 px-5 fw-bold">
                        LOAD MORE
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid bg-primary" id="shop-banner">
   <div class="row">
        <div class="col">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="icons-shop d-flex justify-content-around py-4">
                            <div>
                                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="original-comics">
                                <span>DIGITAL COMICS</span>
                            </div>
                            <div>
                                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="merchandise">
                                <span>DC MERCHANDISE</span>
                            </div>
                            <div>
                                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="subscritption">
                                <span>SUBSCRIPTION</span>
                            </div>
                            <div>
                                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="shoplocator">
                                <span>COMIC SHOP LOCATOR</span>
                            </div>
                            <div>
                                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="power-visa">
                                <span>DC POWER VISA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</section>
@endsection
