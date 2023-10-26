@extends('layouts.main')

@section('content')
<section class="cntailer-section-productonly" style="display: inline-block">
@if($product != null)
    <section class="page-section-productonly">
        <div class="product-item">
            <div class="product-item=title section-heading-productonly"> {{$product->name}}</div>
            <div>   
                <img class="product-item-img mx-auto d-flex rounded img-fluid" src="{{$product->path}}" alt="drink" style="height: 250px"/>
            </div>
            <div id="sup-links" class="sup-links">
            </div>
            <div class="product-item section-heading-productonly">{{$product->price}}</div>
        </div>
</section>
@endif
</section>
@endsection
