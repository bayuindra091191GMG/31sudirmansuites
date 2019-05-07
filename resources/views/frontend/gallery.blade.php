@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="31 SUDIRMAN SUITES Gallery">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="31 SUDIRMAN SUITES, Property, Office, Residence, Apartment, House">

    <title>31 SUDIRMAN SUITES - GALLERY</title>
@endsection

@section('content')

<section class="mb-5 banner-margin-top">
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-md-12">
                <div class="w-100 img-banner-responsive" style="background-image: url('{{ asset('images/31ss/gallery/banner-gallery.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                    <div class="box h-100 d-flex justify-content-center flex-column text-center px-3">
                        <span class="t1-b-1 font-custom-libre-baskerville-bold text-custom-black d-none d-md-block">GALLERY</span>
                        <span class="t1-m-5 font-custom-libre-baskerville-bold text-custom-black d-block d-md-none">GALLERY</span>
                        <hr class="mx-auto banner-line-width" style="border-bottom: 2px solid #000;"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-5 pb-5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-4" >
                    <img class="w-100 gallery" src="{{ asset('images/31ss/hotel/website36.jpg') }}" alt="Drop Off"  
                    onmouseover="this.src='{{ asset('images/31ss/hotel/website42.jpg') }}'" 
                    onmouseout="this.src='{{ asset('images/31ss/hotel/website36.jpg') }}'">
            </div>
            <div class="col-4" >
                    {{-- <div class="w-100 gallery" style="background-image: url('{{ asset('images/31ss/hotel/website37.jpg') }}');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;"></div>      --}}
                    <img class="w-100 gallery" src="{{ asset('images/31ss/hotel/website37.jpg') }}" alt="Main Entrance"  
                    onmouseover="this.src='{{ asset('images/31ss/hotel/website43.jpg') }}'" 
                    onmouseout="this.src='{{ asset('images/31ss/hotel/website37.jpg') }}'">
                </div>
            <div class="col-4" >
                <img class="w-100 gallery" src="{{ asset('images/31ss/hotel/website38.jpg') }}" alt="Hotel Lobby"  
                    onmouseover="this.src='{{ asset('images/31ss/hotel/website44.jpg') }}'" 
                    onmouseout="this.src='{{ asset('images/31ss/hotel/website38.jpg') }}'">     
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-4" >
                <img class="w-100 gallery" src="{{ asset('images/31ss/hotel/website39.jpg') }}" alt="Apartment Lobby"  
                    onmouseover="this.src='{{ asset('images/31ss/hotel/website45.jpg') }}'" 
                    onmouseout="this.src='{{ asset('images/31ss/hotel/website39.jpg') }}'">     
            </div>
            <div class="col-4" >
                <img class="w-100 gallery" src="{{ asset('images/31ss/hotel/website40.jpg') }}" alt="Unit Interior"  
                    onmouseover="this.src='{{ asset('images/31ss/hotel/website46.jpg') }}'" 
                    onmouseout="this.src='{{ asset('images/31ss/hotel/website40.jpg') }}'">     
            </div>
            <div class="col-4" >
                <img class="w-100 gallery" src="{{ asset('images/31ss/hotel/website41.jpg') }}" alt="Swimming Pool"  
                    onmouseover="this.src='{{ asset('images/31ss/hotel/website47.jpg') }}'" 
                    onmouseout="this.src='{{ asset('images/31ss/hotel/website41.jpg') }}'">     
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-4" >
                <img class="w-100 gallery" src="{{ asset('images/31ss/gallery/dayview.jpg') }}" alt="Dayview"  
                    onmouseover="this.src='{{ asset('images/31ss/gallery/pop-up-10.jpg') }}'" 
                    onmouseout="this.src='{{ asset('images/31ss/gallery/dayview.jpg') }}'">     
            </div>
            <div class="col-4" >
                <img class="w-100 gallery" src="{{ asset('images/31ss/gallery/facade.jpg') }}" alt="Facade"  
                    onmouseover="this.src='{{ asset('images/31ss/gallery/pop-up-11.jpg') }}'" 
                    onmouseout="this.src='{{ asset('images/31ss/gallery/facade.jpg') }}'">     
            </div>
            <div class="col-4" >
                <img class="w-100 gallery" src="{{ asset('images/31ss/gallery/nightview.jpg') }}" alt="Nightview"  
                    onmouseover="this.src='{{ asset('images/31ss/gallery/pop-up-12.jpg') }}'" 
                    onmouseout="this.src='{{ asset('images/31ss/gallery/nightview.jpg') }}'">     
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

        .img-responsive{
            height: 160px;
        }

        .img-responsive2{
            height: 100px;
        }

        .img-responsive3{
            height: 281px;
        }
        
        .img-responsive4{
            height: 165px;
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
                height: 325px;
            }

            .img-responsive{
                height: 500px;
            }

            .img-responsive{
                height: 500px;
            }

            .img-responsive2{
                height: 350px;
            }

            .img-responsive3{
            height: 565px;
            }

            .img-responsive4{
            height: 570px;
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