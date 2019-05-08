@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="31 SUDIRMAN SUITES Apartment Units">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="31 SUDIRMAN SUITES, Property, Office, Residence, Apartment, House">

    <title>APARTMENTS - UNIT</title>
@endsection

@section('content')

<section class="mb-5 banner-margin-top">
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-md-12">
                <div class="w-100 img-banner-responsive" style="background-image: url('{{ asset('images/31ss/apartments/banner-apartments-09.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                    <div class="box h-100 d-flex justify-content-center flex-column text-center px-3">
                        <span class="t1-b-1 font-custom-libre-baskerville-bold text-custom-black">APARTMENTS</span>
                        <hr class="mx-auto banner-line-width" style="border-bottom: 2px solid #000;"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
        <div class="container m-b-300">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <p class="text-custom-light-brown">
                        <span class="t1-m-2 font-custom-tiempos-light-italic">the
                                {{-- <img src="{{ asset('images/31ss/apartments/website1-35.png') }}" alt="IMG" style="width:130px;" class="img-fluid float-right mt-2"> --}}
                            </span><br/>
                        <span class="font-custom-tiempos-regular">Unit Plan</span><br/>
                    </p>
                    <div class="flex-col-c-c py-3">
                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                    </div>
                    
                    {{-- <p class="text-custom-light-brown">Premier Suites A, B, C, D
                            <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span></p><br/>
                        <div style="background-image: url('{{ asset('images/31ss/apartments/premiersuitesabcd.png') }}');
                                background-repeat: no-repeat;
                                background-position: left;
                                background-size: contain;
                                height: 400px;">
                        </div>
                        <div style="background-image: url('{{ asset('images/31ss/apartments/website19.jpg') }}');
                                background-repeat: no-repeat;
                                background-position: left;
                                background-size: 80%;
                                height: 400px;">
                        </div> --}}
                    {{-- <div class="flex-col-c-c py-3">
                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                    </div> --}}
                    <div id="accordion" class="panel-group pb-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <div class="d-md-block d-none">
                                        <a href="#panelBodyFive" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                            North Private Suites
                                            <span class="font-custom-avenir-medium float-r ">View More &nbsp;
                                            <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span>
                                        </a>
                                    </div>
                                    <div class="d-md-none d-block">
                                        <a href="#panelBodyFive" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                            North Private Suites
                                            <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid float-r">
                                        </a>
                                    </div>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </h4>                                                                    
                            </div>
                            <div id="panelBodyFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="w-100 img-responsive mb-4 d-none d-md-block" style="background-image: url('{{ asset('images/31ss/apartments/north-private-suites.png') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: contain;">
                                    </div>
                                    <div class="w-100 img-responsive3 mb-4 d-block d-md-none" style="background-image: url('{{ asset('images/31ss/apartments/north-private-suites-mobile.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        background-size: contain;">
                                    </div>
                                    <div class="w-100 img-responsive" style="background-image: url('{{ asset('images/31ss/apartments/website22.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;">
                                    </div>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <p class="text-custom-light-brown">North Private Suites
                            <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span></p><br/>
                        <div style="background-image: url('{{ asset('images/31ss/apartments/northprivatesuites.png') }}');
                                background-repeat: no-repeat;
                                background-position: left;
                                background-size: 80%;
                                height: 450px;">
                        </div>
                        <div style="background-image: url('{{ asset('images/31ss/apartments/website22.jpg') }}');
                                background-repeat: no-repeat;
                                background-position: left;
                                background-size: 80%;
                                height: 400px;">
                        </div>
                    <div class="flex-col-c-c py-3">
                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                    </div> --}}
                    <div id="accordion" class="panel-group pb-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <div class="d-md-block d-none">
                                        <a href="#panelBodySix" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                            South Private Suites
                                            <span class="font-custom-avenir-medium float-r ">View More &nbsp;
                                            <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span>
                                        </a>
                                    </div>
                                    <div class="d-md-none d-block">
                                        <a href="#panelBodySix" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                            South Private Suites
                                            <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid float-r">
                                        </a>
                                    </div>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </h4>                                                                    
                            </div>
                            <div id="panelBodySix" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="w-100 img-responsive mb-4 d-none d-md-block" style="background-image: url('{{ asset('images/31ss/apartments/south-private-suites.png') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: contain;">
                                    </div>
                                    <div class="w-100 img-responsive3 mb-4 d-block d-md-none" style="background-image: url('{{ asset('images/31ss/apartments/south-private-suites-mobile.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: contain;">
                                    </div>
                                    <div class="w-100 img-responsive" style="background-image: url('{{ asset('images/31ss/apartments/website25.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;">
                                    </div>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <p class="text-custom-light-brown">South Private Suites
                            <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span></p><br/>
                        <div style="background-image: url('{{ asset('images/31ss/apartments/southprivatesuites.png') }}');
                                background-repeat: no-repeat;
                                background-position: left;
                                background-size: 80%;
                                height: 450px;">
                        </div>
                        <div style="background-image: url('{{ asset('images/31ss/apartments/website25.jpg') }}');
                                background-repeat: no-repeat;
                                background-position: left;
                                background-size: 80%;
                                height: 400px;">
                        </div>
                    <div class="flex-col-c-c py-3">
                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                    </div> --}}
                    <div id="accordion" class="panel-group pb-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <div class="d-md-block d-none">
                                        <a href="#panelBodyFour" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                            3 Bedroom Premier Suites A, B ,C, D
                                            <span class="font-custom-avenir-medium float-r ">View More &nbsp;
                                            <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span>
                                        </a>
                                    </div>
                                    <div class="d-md-none d-block">
                                        <a href="#panelBodyFour" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                            3 Bedroom Premier Suites A, B ,C, D
                                            <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid float-r">
                                        </a>
                                    </div>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </h4>                                                                    
                            </div>
                            <div id="panelBodyFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="w-100 img-responsive d-none d-md-block" style="background-image: url('{{ asset('images/31ss/apartments/3-bedroom-premier-suites-abcd.png') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: contain;">
                                    </div>
                                    <div class="w-100 img-responsive4 d-block d-md-none" style="background-image: url('{{ asset('images/31ss/apartments/3-bedroom-premier-suites-abcd-mobile.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        background-size: contain;">
                                    </div>
                                    <div class="w-100 img-responsive" style="background-image: url('{{ asset('images/31ss/apartments/website19.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;">
                                    </div>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="accordion" class="panel-group pb-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <div class="d-md-block d-none">
                                        <a href="#panelBodySeven" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                            3 Bedroom Premier Suites E
                                            <span class="font-custom-avenir-medium float-r ">View More &nbsp;
                                            <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span>
                                        </a>
                                    </div>
                                    <div class="d-md-none d-block">
                                        <a href="#panelBodySeven" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                            3 Bedroom Premier Suites E
                                            <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid float-r">
                                        </a>
                                    </div>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </h4>                                                                    
                            </div>
                            <div id="panelBodySeven" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="py-5 w-100 img-responsive d-none d-md-block" style="background-image: url('{{ asset('images/31ss/apartments/3-bedroom-premier-suites-e.png') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: contain;">
                                    </div>
                                    <div class="py-5 w-100 img-responsive4 d-block d-md-none" style="background-image: url('{{ asset('images/31ss/apartments/3-bedroom-premier-suites-e-mobile.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        background-size: contain;">
                                    </div>
                                    <div class="w-100 img-responsive" style="background-image: url('{{ asset('images/31ss/apartments/website28.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;">
                                    </div>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <p class="text-custom-light-brown">Premier Suite E
                            <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span></p><br/>
                        <div style="background-image: url('{{ asset('images/31ss/apartments/premiersuitee.png') }}');
                                background-repeat: no-repeat;
                                background-position: left;
                                background-size: 80%;
                                height: 450px;">
                        </div>
                        <div style="background-image: url('{{ asset('images/31ss/apartments/website28.jpg') }}');
                                background-repeat: no-repeat;
                                background-position: left;
                                background-size: 80%;
                                height: 400px;">
                        </div>
                    <div class="flex-col-c-c py-3">
                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                    </div> --}}
                    <div id="accordion" class="panel-group pb-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <div class="d-md-block d-none">
                                        <a href="#panelBodyEight" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                            2 Bedroom Suites
                                            <span class="font-custom-avenir-medium float-r ">View More &nbsp;
                                            <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span>
                                        </a>
                                    </div>
                                    <div class="d-md-none d-block">
                                        <a href="#panelBodyEight" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                            2 Bedroom Suites
                                            <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid float-r">
                                        </a>
                                    </div>
                                </h4>                                                                    
                            </div>
                            <div id="panelBodyEight" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="w-100 img-responsive d-none d-md-block" style="background-image: url('{{ asset('images/31ss/apartments/2-bedroom-suites.png') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: contain;">
                                    </div>
                                    <div class="w-100 img-responsive4 d-block d-md-none" style="background-image: url('{{ asset('images/31ss/apartments/2-bedroom-suites-mobile.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        background-size: contain;">
                                    </div>
                                    {{-- <div class="w-100 img-banner-responsive" style="background-image: url('{{ asset('images/31ss/apartments/website22.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;">
                                    </div> --}}
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <p class="text-custom-light-brown">Two Bedroom
                            <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span></p><br/>
                    <div style="background-image: url('{{ asset('images/31ss/apartments/twobedroom.png') }}');
                                background-repeat: no-repeat;
                                background-position: left;
                                background-size: 80%;
                                height: 450px;">
                        </div>
                    <div class="flex-col-c-c py-3">
                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                    </div> --}}
                        {{-- <div style="background-image: url('{{ asset('images/31ss/apartments/website1-14.jpg') }}');
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: contain;
                                height: 400px;">
                        </div> --}}
                </div>
                <div class="col-1"></div>
            </div>      
        </div>
</section>


@endsection

@section('styles')
    <style>
        .t1-b-1{
            font-size: 20px;
            line-height: 1.2;
            letter-spacing: 1px;
        }

        hr{
            margin-top: 0.2rem;
            margin-bottom: 0.2rem;
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
            height: 145px;
        }

        .img-responsive2{
            height: 100px;
        }

        .img-responsive3{
            height: 773px;
        }

        .img-responsive4{
            height: 723px;
        }

        .img-map-responsive{
            height: 250px;
        }

        @media (min-width: 576px) {

        }

        @media (min-width: 768px) {
            .img-banner-responsive{
                height: 325px;
            }

            .img-responsive{
                height: 500px;
            }

            .img-responsive{
                height: 510px;
            }

            .t1-b-1{
                font-size: 36px;
                line-height: 1.2;
                letter-spacing: 1px;
            }

            hr{
                margin-top: 1rem;
                margin-bottom: 1rem;
            }
        }

        @media (min-width: 992px) {

        }

        @media (min-width: 1200px) {
        }
    </style>
@endsection


@section('scripts')
@endsection