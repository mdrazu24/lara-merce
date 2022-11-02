@props(['products'])

<div  class="row justify-content-center pb-5 pt-2 ">

    @foreach ($products as $product)
        <div class="col-6 col-md-3 overflow-hidden btn d-flex flex-column align-items-center ">
        <img height="220" width="250" src="{{$product["image_url"]}}" alt="products" />
        <p class="fw-bolder pt-2">{{$product["title"]}}</p>
        <span class="text-primary"><del>£{{$product["discountedPrice"]}}</del> £{{$product["mainPrice"]}}
        </span>
        <a href="{{ route('singleproduct', ['id'=>$product["id"]]) }}">Check</a>
    </div>
    @endforeach

</div>
