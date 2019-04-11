@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>APARTMENTS - FLOOR PLAN</title>
@endsection

@section('content')

<section class="mt-3 bg-0 flex-wr-s-st m-b-15-sr991">
        <div class="container-fluid">
            <div class="col-12">
                <div class="w-100 img-banner-responsive" style="background-image: url('{{ asset('images/31ss/apartments/Website1-12.jpg') }}');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;">
                </div>
            </div>
        </div>
</section>

<section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                <p class="text-custom-light-brown">
                        <span class="font-italic t1-m-1">the
                                {{-- <img src="{{ asset('images/31ss/apartments/Website1-35.png') }}" alt="IMG" style="width:130px;" class="img-fluid float-right mt-2"> --}}
                        </span><br/>
                        <span class="font-weight-bold">Floor Plan</span><br/>
                    </p>
                    <div class="flex-col-c-c py-3">
                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                    </div>
                    <div id="accordion" class="panel-group pb-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#panelBodyThree" class="text-custom-light-brown" data-toggle="collapse" data-parent="accordion">
                                        Placement
                                        <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/Website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span>
                                    </a>
                                </h4>                                                                    
                            </div>
                            <div class="flex-col-c-c py-3">
                                <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                            </div>
                            <div id="panelBodyThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="py-5 mb-5" style="background-image: url('{{ asset('images/31ss/apartments/Website18.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;
                                        height: 500px;">
                                    </div>
                                    <div class="py-5 mb-5" style="background-image: url('{{ asset('images/31ss/apartments/Website17.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;
                                        height: 500px;">
                                    </div>
                                    <div class="flex-col-c-c pt-3">
                                    <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="mb-5" style="background-image: url('{{ asset('images/31ss/apartments/Website1-13.jpg') }}');
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: contain;
                                height: 400px;">
                        </div>
                </div>
            </div>                        
        </div>
</section>        
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
    <style>
        .slick-prev:before,
        .slick-next:before {
            color: sandybrown;
        }

        .slick-dots li.slick-active button:before{
            font-size: 16px;
            color: sandybrown;
        }

        .slick-dots li button:before{
            font-size: 16px;
            color: sandybrown;
        }

        .home-top-margin{
            margin-top: 0;
        }

        .img-banner-responsive{
            height: 80px;
        }

        .img-map-responsive{
            height: 250px;
        }

        @media (min-width: 576px) {

        }

        @media (min-width: 768px) {
            .home-top-margin{
                margin-top: -100px;
            }

            .img-banner-responsive{
                height: 500px;
            }

            .img-map-responsive{
                height: 650px;
            }
        }

        @media (min-width: 992px) {

        }

        @media (min-width: 1200px) {
        }
    </style>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>

        $(".slider-five-centerpiece").slick({
            dots: true,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
        });

        $(".five-slider").slick({
            dots: true,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
        });
    </script>
@endsection