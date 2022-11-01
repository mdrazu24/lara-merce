@extends('layouts.main')


@section('content')

<div class="container d-flex justify-content-center">

    <div class="d-flex flex-column justify-content-center ">

        <img height="300" width="300" src="{{$product->image_url}}" alt="product_image"/>

        <h1>{{$product->title}}</h1>
        <br/>
        <br/>
        <h4>{{$product->description}}</h4>

        <button class="btn btn-primary" >Buy</button>


    </div>

</div>

@endsection
