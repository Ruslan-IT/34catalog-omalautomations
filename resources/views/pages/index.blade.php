@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @include('partials.header')

    <style>
        .single-img-categorie img {
            width: 100%;
            height: 220px;        /* ← ОДИНАКОВАЯ ВЫСОТА */
            object-fit: cover;    /* ← НЕ ТЯНЕТ, ОБРЕЗАЕТ */
            display: block;
        }

        .pro-img {
            width: 100%;
            height: 260px; /* выбери нужную высоту */
            overflow: hidden;
            position: relative;
        }

        .pro-img img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* главное свойство */
        }

        .single-aboss-product {
            height: 420px; /* подбери под дизайн */
            display: flex;
            flex-direction: column;
        }
        .pro-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .pro-content h4 {
            min-height: 48px; /* одинаковая высота под 2 строки */
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* максимум 2 строки */
            -webkit-box-orient: vertical;
        }
    </style>

    <!-- Main Header Area End Here -->
    <div class="slider-area">
        <div class="slider-activation owl-dot-style owl-carousel">
            <div class="single-slider pt-165 pb-225 bg-img" style="background-image: url('{{ asset('assets/img/slider/slider-bg-1.jpg') }}');">
                <div class="container">
                    <div class="slider-content slider-animated-1">
                        <h1 class="first-h1 animated">Advanced Water</h1>
                        <h1 class="second-h1 animated">Filtration & Treatment</h1>
                        <h1 class="third-h1 animated">Solutions</h1>

                        <div class="slider-btn mt-75">
                            <a class="animated open-modal" href="#">Contact Us</a>
                            <i class="animated icon-right-arrow"></i>
                        </div>
                        <div class="slider-single-img-1">
                            <img class="animated" alt="categorie-img1" src="{{  asset('assets/img/slider/single-slider-1-2.png') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider pt-165 pb-225 bg-img" style="background-image:url('{{ asset('assets/img/slider/slider-bg-1.jpg') }}');">
                <div class="container">
                    <div class="slider-content slider-animated-2">
                        <h1 class="first-h1 animated">Reliable</h1>
                        <h1 class="second-h1 animated">Wastewater </h1>
                        <h1 class="third-h1 animated">Technologies</h1>

                        <div class="slider-btn mt-75">
                            <a class="animated open-modal" href="/">Contact Us</a>
                            <i class="animated icon-right-arrow"></i>
                        </div>
                        <div class="slider-single-img-2">
                            <img class="animated"  alt="categorie-img" src="{{ asset('assets/img/slider/single-slider-22.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item-number"></div>
    </div>
    <!-- Slider Area End Here -->
    <!-- Online Support Area Start Here -->
    <div class="support-style-three pt-80">
        <div class="coustom-container">
            <div class="support-inner">
                <div class="row">
                    <!-- Single Support Start -->
                    <div class="col-lg-4 col-md-4">
                        <div class="single-support mb-all-30">
                            <div class="support-img">
                                <i class="icon-shipped"></i>
                            </div>
                            <div class="support-desc">
                                <h4>Fast & Reliable Delivery</h4>
                                <p>
                                    We provide fast and reliable delivery of industrial components
                                    and equipment to your location.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Support End -->
                    <!-- Single Support Start -->
                    <div class="col-lg-4 col-md-4">
                        <div class="single-support mb-all-30">
                            <div class="support-img">
                                <i class="icon-support"></i>
                            </div>
                            <div class="support-desc">
                                <h4>Technical Support</h4>
                                <p>
                                    Our specialists are ready to help you with product selection,
                                    specifications, and technical questions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Support End -->
                    <!-- Single Support Start -->
                    <div class="col-lg-4 col-md-4">
                        <div class="single-support">
                            <div class="support-img">
                                <i class="icon-debt"></i>
                            </div>
                            <div class="support-desc">
                                <h4>Secure & Transparent Cooperation</h4>
                                <p>
                                    We guarantee transparent pricing, secure transactions,
                                    and reliable partnership for your business.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Support End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Online Support Area End Here -->
    <!-- Our Categorie Two Start Here -->
    <div class="our-categorie-two pt-80">
        <div class="coustom-container">
            <!-- Single Image Categorie Activation Start -->
            <div class="single-img-categorie-active owl-carousel">
                @foreach($categories as $category)
                    <div class="single-img-categorie">
                        <a href="{{ route('category.show', $category->slug) }}">
                            <img
                                src="{{ asset('/storage/'.$category->main_image ) }}"
                                alt="{{ $category->name }}"
                            >
                        </a>

                        <div class="single-cat-desc">
                            <a href="{{ route('category.show', $category->slug) }}">
                                {{ $category->name }}
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- Single Image Categorie Activation End -->
        </div>
    </div>
    <!-- Our Categorie Two End Here -->
    <!-- Best Seller Product Area Start Here -->
    <div class="Products-area-wrapper pt-80 pb-87">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title text-center mb-45">
                <h2>Shopping Products</h2>
                <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
            <!-- Section Title End -->
            <!-- Second Featured Product Activation Start -->
            <div class="Products-area">
                <div class="row">


                @foreach($products->take(24) as $product)

                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                        <!-- Single Product Start -->
                        <div class="single-aboss-product mb-3">
                            <div class="pro-img">
                                <a href="{{ route('product.show', $product->slug) }}">

                                    <img src="{{ asset('storage/' . $product->main_image) }}"
                                         alt="{{ $product->title }}">

                                </a>
                                <div class="pro-actions">
                                    <a   class="quick-view open-modal" href="#">
                                        <i class="icon-zoom"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pro-content">
                                <h4><a href="{{ route('product.show', $product->slug) }}">
                                        {{ $product->title }}</a>
                                </h4>
                                <div class="pro-price-cart">
                                    <div class="pro-home-price">

                                    </div>
                                    <div class="pro-cart">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>

                @endforeach

                </div>
            </div>
            <!-- Second Featured Product Activation End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Best Seller Product Area End Here -->
    <!-- Section Banner Start -->
    <div class="banner-area">
        <div class="coustom-container">
            <div class="bg-img pt-197 pb-165 mobile-res" style="background-image:url({{ asset('assets/img/banner/hop-banner-1.jpg') }});">
                <div class="banner-content">
                    <div class="offer-persent">
                        <p>up to <br><span>30%</span> <br> off</p>
                    </div>
                    <div class="discount">
                        <h3 style="color: #fff;">Make a trip with <br>a great discount.</h3>
                        <a class="open-modal" style="color: #fff;" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Banner End -->
    <div class="best-seller-area pt-80 pb-90">
        <div class="container">
            <div class="section-title text-center mb-45">
                <h2>Best Seller</h2>
                <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
            <div class="best-seller-active owl-carousel">

                @foreach($deals as $product)

                <div class="single-aboss-product">
                    <div class="pro-img">
                        <a href="{{ route('product.show', $product->slug) }}">
                            <img src="{{ asset('storage/' . $product->main_image)  }}"
                                 alt="{{ $product->title }}">
                        </a>
                        <div class="pro-actions">
                            <a class="quick-view open-modal" href="#"><i class="icon-zoom"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pro-content">
                        <h4><a href="{{ route('product.show', $product->slug) }}">{{ $product->title }}</a></h4>
                        <div class="pro-price-cart">
                            <div class="pro-home-price">

                            </div>
                            <div class="pro-cart">

                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
    <!-- Bradn Area Start Here -->
    {{--<div class="brand pb-90">
        <div class="container">
            <!-- Brand Logo Active Start Here -->
            <div class="brand-logo-active brand-brown-color owl-carousel ptb-80 border-top border-bottom">
                <div class="single-brand">
                    <a href="#"><img src="img/brand/brand-1.png" alt="brand-image"></a>
                </div>
                <div class="single-brand">
                    <a href="#"><img src="img/brand/brand-2.png" alt="brand-image"></a>
                </div>
                <div class="single-brand">
                    <a href="#"><img src="img/brand/brand-3.png" alt="brand-image"></a>
                </div>
                <div class="single-brand">
                    <a href="#"><img src="img/brand/brand-4.png" alt="brand-image"></a>
                </div>
                <div class="single-brand">
                    <a href="#"><img src="img/brand/brand-5.png" alt="brand-image"></a>
                </div>
                <div class="single-brand">
                    <a href="#"><img src="img/brand/brand-2.png" alt="brand-image"></a>
                </div>
            </div>
            <!-- Brand Logo Active End Here -->
        </div>
    </div>--}}
    <!-- Bradn Area End  Here -->
    <!-- Footer Area Start Here -->








    @include('partials.footer')

    @include('partials.modal')

@endsection
