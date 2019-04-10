@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>APARTMENTS - FLOOR PLAN</title>
@endsection

@section('content')

<section class="bg-0 flex-wr-s-st m-b-15-sr991">
        <div class="col-md-12 size-a-18 respon-3 header-img" style="background-image: url('{{ asset('images/31ss/apartments/website1-12.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            height: 400px;">
        </div>      
</section>

<section>
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-9">
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