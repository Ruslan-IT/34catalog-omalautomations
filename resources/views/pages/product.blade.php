@extends('layouts.app')

@section('title', $product->title)

@section('content')


    <div class="wrapper">

        @include('partials.header')

        <style>
            .blog-details-img img {
                width: 100%;
                height: 500px;
                object-fit: cover;
            }

            .blog-details-tab img {
                width: 90px;
                height: 90px;
                object-fit: cover;
                cursor: pointer;
            }

            .blog-details-tab {
                display: flex;
                gap: 10px;          /* Расстояние между миниатюрами */
                flex-wrap: nowrap;   /* В одну строку */

            }

            .blog-details-tab a img {
                width: 90px;         /* одинаковая ширина */
                height: 90px;        /* одинаковая высота */
                object-fit: contain;  /* сохраняет пропорции, не обрезает */

                padding: 4px;
                background: #fff;
                cursor: pointer;
                transition: 0.2s;
            }

            .blog-details-tab a.active img,
            .blog-details-tab a:hover img {
                border-color: #000;  /* активная / наведённая миниатюра */
                transform: scale(1.05);
            }
            .blog-details-tab a {
                flex: 0 0 10px;
            }

        </style>



        <div class="breadcrumb-area pt-65 pb-70 bg-img" style="background-image:url(img/bg-image/hop-brech-bg.jpg);">
            <div class="container">
                <div class="breadcrumb-wrap text-center">
                    <h3>Blog Details</h3>
                    <ol class="breadcrumb breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">blog details</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8">
                    <div class="blog-details-wrapper">

                        <div class="blog-details-img">

                            {{-- LARGE IMAGES --}}
                            <div class="tab-content">

                                {{-- MAIN IMAGE --}}
                                <div id="pro-0" class="tab-pane fade show active">
                                    <img src="{{ asset('storage/' . $product->main_image) }}"
                                         alt="{{ $product->title }}"
                                         class="img-fluid">
                                </div>

                                {{-- GALLERY --}}
                                @foreach($product->gallery ?? [] as $index => $image)
                                    @if($image !== $product->main_image)
                                        <div id="pro-{{ $index + 1 }}" class="tab-pane fade">
                                            <img src="{{ asset('storage/' . $image) }}"
                                                 alt="{{ $product->title }}"
                                                 class="img-fluid">
                                        </div>
                                    @endif
                                @endforeach

                            </div>

                            {{-- THUMBNAILS --}}
                            <div class="blog-details-tab-wrap mt-20">
                                <div class="blog-details-tab nav" role="tablist">

                                    {{-- MAIN THUMB --}}
                                    <a class="active" data-toggle="tab" href="#pro-0">
                                        <img src="{{ asset('storage/' . $product->main_image) }}"
                                             alt="{{ $product->title }}">
                                    </a>

                                    {{-- GALLERY THUMBS --}}
                                    @foreach($product->gallery ?? [] as $index => $image)
                                        @if($image !== $product->main_image)
                                            <a data-toggle="tab" href="#pro-{{ $index + 1 }}">
                                                <img src="{{ asset('storage/' . $image) }}"
                                                     alt="{{ $product->title }}">
                                            </a>
                                        @endif
                                    @endforeach

                                </div>
                            </div>

                        </div>


                    </div>
                </div>
                <div class="col-lg-5 col-md-4">
                    <div class="blog-details-content ">

                        <h3 class="mb-20">{{ $product->title }}</h3>

                        @if($product->description)
                            <p>
                                <span>{{ Str::substr($product->description, 0, 1) }}</span>
                                {{ Str::substr($product->description, 1) }}
                            </p>
                        @endif


                        <div class="mt-30">
                            <a class="btn btn-dark open-modal" href="#">
                                <i class="fa fa-shopping-basket"></i> Buy now
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12 col-md-8">

                    @if($product->desc1)
                        <div class="blog-details-pera">
                            <p>{{ $product->desc1 }}</p>
                        </div>
                    @endif

                    @if($product->desc2)
                        <div class="blog-details-pera">
                            <p>{{ $product->desc2 }}</p>
                        </div>
                    @endif

                    @if($product->desc3)
                        <div class="blog-details-pera">
                            <p>{{ $product->desc3 }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>





            </div>

    <!-- Global Overlay Start -->
    <div class="global-overlay"></div>
    <!-- Global Overlay End -->





@include('partials.modal')
@include('partials.footer')

@endsection
