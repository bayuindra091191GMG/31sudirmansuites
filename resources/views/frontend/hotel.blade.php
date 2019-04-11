@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>31 SUDIRMAN SUITES - HOTEL</title>
@endsection

@section('content')
<section class="mt-3 bg-0 flex-wr-s-st m-b-15-sr991">
    <div class="container-fluid">
        <div class="col-12">
            <div class="w-100 img-banner-responsive" style="background-image: url('{{ asset('images/31ss/hotel/website33.jpg') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;">
            </div>
        </div>
    </div>
</section>

    <section>
        <div class="container">
            <div class="row px-5 pt-5">
                <div class="col-12 col-md-4">
                    <div class="img-fluid img-responsive" style="background-image: url('{{ asset('images/31ss/hotel/website34.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: contain;
                        height: 330px;">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="pt-3 img-fluid img-responsive text-center"> 
                        <img src="{{ asset('images/31ss/hotel/Website 31ss 2-28.png') }}" style="height:80px"; alt="IMG">
                    </div>
                    <div class="pl-5 pt-5 pb-5 mb-1" style="font-size: 13px;">
                        <p>The first-ever Hyatt Place Hotel in Indonesia will rise elegantly beside the<br/>
                            captivating 31 Sudirman Suites. The direct and easy access to the Hyatt<br/>
                            Place’s world-class amenities, leads 31 Sudirman Suites into luxurious yet<br/>
                            life-enhancing development.<br/>
                        </p>
                    </div>
                    <div class="pl-5">
                        <p>"We go above and beyond to deliver what<br/>
                            is best for our residents."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 img-fluid img-responsive img-map-responsive" style="background-image: url('{{ asset('images/31ss/hotel/website35.jpg') }}');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: contain;">
                </div>
            </div>
        </div>
    </section>
    <section class="m-b-50">
        <div class="container">
            <div class="row px-5">
                <div class="col-md-4 col-12 text-center text-md-left">
                    <div class="size-a-2 bg-3 bg-custom-light-brown" style="width: 20%; height: 5px;"></div>
                    <div class="pt-3">
                        <p>Residential Services include<br/>
                            access to our 24-hour concierge service.<br/>
                            Our staffs are always at hand for any<br/>
                            queries you may have.<br/></p>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center text-md-left">
                    <div class="size-a-2 bg-3 bg-custom-light-brown" style="width: 20%; height: 5px;"></div>
                    <div class="pt-3">
                        <p>24-hour concierge<br/>
                            Designated fitness attendants<br/>
                            Designated swimming pool attendants<br/>
                            Maintenance of infrastructure<br/>
                            Elevator maintenance system<br/></p>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center text-md-left">
                        <div class="size-a-2 bg-3 bg-custom-light-brown" style="width: 20%; height: 5px;"></div>
                        <div class="pt-3">
                        <p>24-hour security<br/>
                            24-hour on call emergency repair<br/>
                            Common areas maintenance<br/>
                            Pool cleaning and maintenance<br/>
                            Gardening and landscaping<br/>
                            Pest control service<br/></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class= "col-12 text-center text-custom-light-brown pb-2" 
                    style="font-size: 30px !important;
                    font-weight: bold;">
                    Gallery
                </div>
            <div class="size-a-2 bg-3 bg-custom-light-brown" style="width: 3%; height: 1px;"></div>
            </div>
        </div>
    </section>
    <section class="mt-5 pb-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-4" >
                    <div class="w-100 gallery" style="background-image: url('{{ asset('images/31ss/hotel/website36.jpg') }}');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;"></div>     
                </div>
                <div class="col-4" >
                        <div class="w-100 gallery" style="background-image: url('{{ asset('images/31ss/hotel/website37.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;"></div>     
                    </div>
                <div class="col-4" >
                    <div class="w-100 gallery" style="background-image: url('{{ asset('images/31ss/hotel/website38.jpg') }}');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;"></div>     
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-4" >
                    <div class="w-100 gallery" style="background-image: url('{{ asset('images/31ss/hotel/website39.jpg') }}');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;"></div>     
                </div>
                <div class="col-4" >
                    <div class="w-100 gallery" style="background-image: url('{{ asset('images/31ss/hotel/website40.jpg') }}');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;"></div>     
                </div>
                <div class="col-4" >
                    <div class="w-100 gallery" style="background-image: url('{{ asset('images/31ss/hotel/website47.jpg') }}');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;"></div>     
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

        .gallery{
            height: 100px;
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
                height: 450px;
            }

            .gallery{
                height: 400px;
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