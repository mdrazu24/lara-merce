@extends('layouts.main')

@section('content')
    <x-hero />
    {{-- new Arrivals --}}
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="h2">NEW ARRIVALS</h1>
            <p class="btn btn-link">more>></p>
        </div>
        <x-products products={{$products}} />
    </div>
    {{-- Banner --}}
    <div class="container overflow-hidden position-relative mb-4 d-flex align-items-center justify-content-center ">
        <img height="150"
            src="https://themeshopy.com/demo/advance-ecommerce-store-pro/wp-content/themes/advance-ecommerce-store-pro/assets/images/banner-1.webp"
            alt="banner" />
        <div class="position-absolute fw-bold h2">
            It's time to get warp up
            <div class="mx-5"> <button class="btn btn-outline-primary">Buy Now</button>
            </div>
        </div>
    </div>
    {{-- Tending Products --}}
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="h2">TRENDING PRODUCTS</h1>
            <p class="btn btn-link">more>></p>
        </div>
        <x-products products={{$products}} />
    </div>

    {{-- Featured Products --}}
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="h2">FEATURED PRODUCTS</h1>
            <p class="btn btn-link">more>></p>
        </div>
        <x-products products={{$products}}/>
    </div>
    {{-- banner --}}
       <div class="container overflow-hidden position-relative mb-4 d-flex align-items-center justify-content-center ">
        <img height="150"
            src="https://themeshopy.com/demo/advance-ecommerce-store-pro/wp-content/themes/advance-ecommerce-store-pro/assets/images/banner-2.webp"
            alt="banner" />
        <div class="position-absolute text-white fw-bold h2">
            Products & Gifts for Kids
            <div class="mx-5"> <button class="btn btn-outline-light">Buy Now</button>
            </div>
        </div>
    </div>
    {{-- Our Products --}}
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="h2">OUR PRODUCTS</h1>
            <p class="btn btn-link">more>></p>
        </div>
        {{-- something --}}

        <x-products products={{$products}} />
    </div>
@endsection
