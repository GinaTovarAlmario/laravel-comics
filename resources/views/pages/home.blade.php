@extends('layouts.app')

@section("page-title", "Homepage")
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
<section class="container-fluid bg-primary" id="shop-banner">
    <div class="row">
         <div class="col">
             <div class="container">
                 <div class="row">
                     <div class="col">
                         <div class="icons-shop d-flex justify-content-around py-4">
                             <div>
                                 <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="original-comics">
                                 <a href="#">DIGITAL COMICS</a>
                             </div>
                             <div>
                                 <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="merchandise">
                                 <a href="#">DC MERCHANDISE</a>
                             </div>
                             <div>
                                 <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="subscritption">
                                 <a href="#">SUBSCRIPTION</a>
                             </div>
                             <div>
                                 <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="shoplocator">
                                 <a href="#">COMIC SHOP LOCATOR</a>
                             </div>
                             <div>
                                 <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="power-visa">
                                 <a href="#">DC POWER VISA</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </div>
 </section>
@endsection
