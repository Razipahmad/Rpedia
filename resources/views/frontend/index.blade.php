@extends('layouts.front')

@section('title')
    Welcom To E-store
@endsection

@section('content')
@include('layouts/inc/slider')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2 class="pb-3">Featured Products</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featured_products as $prod)
                        <div class="item">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="">
                                <div class="card-body">
                                    <h5>{{$prod->name}}</h5>
                                    <span class="float-start">Rp. {{$prod->selling_price}}</span>
                                    <span class="float-end"style="text-decoration: line-through;">Rp. {{$prod->original_price}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.featured-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            dots:false,
            autoplay:true,
            autoplayTimeout:1500,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    </script>
@endsection