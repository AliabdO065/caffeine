@extends('layouts.main')

@section('content')
<section class="page-section" style="height: 360px">
<section class="cntailer-section-productonly detail" style="">
@if($product != null)
<section class="page-section-productonly">
        <div class="container ">
        <div class="product-item">
            <div class="product-item=title section-heading-productonly"> {{$product->name}}</div>
            <div>   
                <img class="product-item-img mx-auto d-flex rounded img-fluid" src="{{asset('images/'.$product->path)}}" alt="drink" style="height: 250px"/>
            </div>
            <div id="sup-links" class="sup-links">
            </div>
            <div class="product-item section-heading-productonly">{{$product->price}}</div>
        </div>
    </div>
</section>
@endif
</section>
</section>
@endsection

<style>
.detail{
    position: absolute;
    left: 50%;
    top :40%;
    transform: translateX(-50%);
}
</style>