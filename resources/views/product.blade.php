@extends('layouts.main')

@section('content')

<ul class="navbar-nav-spicial mx-auto">
    @foreach($category as $c)
    <li class="nav-item px-lg-4"><a class="naink text-uppercase" href="{{route('product')}}?id={{$c->id}}">{{$c->name}}</a></li>
    @endforeach
</ul>
<section class="cntailer-section-productonly" style="display: inline-block">
    @foreach($products as $p)
        <section class="page-section-productonly">
            <div class="product-item">
                <div class="product-item=title section-heading-productonly"> {{$p->name}} <br> {{$p->category->name}} </div>
                <div>   
                    <img class="product-item-img mx-auto d-flex rounded img-fluid" src="{{asset('images/'.$p->path)}}" 
                                alt="drink" style="height: 250px"/>
                </div>
                <div id="sup-links" class="sup-links">
                </div>
                <div class="product-item section-heading-productonly">{{$p->price}}</div>
                <a href="{{route('product.details',$p->id)}}" class="btn btn-primary m-3">details</a>
            </div>
        </section>
    @endforeach
</section>
@endsection
