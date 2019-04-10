@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>APARTMENTS - UNIT PLAN</title>
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
                        <span class="font-weight-bold">Unit Plan</span><br/>
                    </p>
                    <div class="flex-col-c-c py-3">
                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                    </div>
                    <div id="accordion" class="panel-group pb-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#panelBodyFour" class="text-custom-light-brown" data-toggle="collapse" data-parent="accordion">
                                        Premier Suites A, B ,C, D
                                        <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/Website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span>
                                    </a>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </h4>                                                                    
                            </div>
                            <div id="panelBodyFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="py-5" style="background-image: url('{{ asset('images/31ss/apartments/premiersuitesabcd.png') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;
                                        height: 450px;">
                                    </div>
                                    <div style="background-image: url('{{ asset('images/31ss/apartments/website19.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;
                                        height: 400px;">
                                    </div>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <p class="text-custom-light-brown">Premier Suites A, B, C, D
                            <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/Website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span></p><br/>
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
                                    <a href="#panelBodyFive" class="text-custom-light-brown" data-toggle="collapse" data-parent="accordion">
                                        North Private Suites
                                        <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/Website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span>
                                    </a>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </h4>                                                                    
                            </div>
                            <div id="panelBodyFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="py-5" style="background-image: url('{{ asset('images/31ss/apartments/northprivatesuites.png') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;
                                        height: 500px;">
                                    </div>
                                    <div style="background-image: url('{{ asset('images/31ss/apartments/website22.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;
                                        height: 400px;">
                                    </div>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <p class="text-custom-light-brown">North Private Suites
                            <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/Website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span></p><br/>
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
                                    <a href="#panelBodySix" class="text-custom-light-brown" data-toggle="collapse" data-parent="accordion">
                                        South Private Suites
                                        <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/Website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span>
                                    </a>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </h4>                                                                    
                            </div>
                            <div id="panelBodySix" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="py-5" style="background-image: url('{{ asset('images/31ss/apartments/southprivatesuites.png') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;
                                        height: 500px;">
                                    </div>
                                    <div style="background-image: url('{{ asset('images/31ss/apartments/website25.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;
                                        height: 400px;">
                                    </div>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <p class="text-custom-light-brown">South Private Suites
                            <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/Website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span></p><br/>
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
                                    <a href="#panelBodySeven" class="text-custom-light-brown" data-toggle="collapse" data-parent="accordion">
                                        Premier Suite E
                                        <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/Website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span>
                                    </a>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </h4>                                                                    
                            </div>
                            <div id="panelBodySeven" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="py-5" style="background-image: url('{{ asset('images/31ss/apartments/premiersuitee.png') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;
                                        height: 450px;">
                                    </div>
                                    <div style="background-image: url('{{ asset('images/31ss/apartments/website28.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;
                                        height: 400px;">
                                    </div>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <p class="text-custom-light-brown">Premier Suite E
                            <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/Website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span></p><br/>
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
                                    <a href="#panelBodyEight" class="text-custom-light-brown" data-toggle="collapse" data-parent="accordion">
                                        Two Bedroom
                                        <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/Website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span>
                                    </a>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </h4>                                                                    
                            </div>
                            <div id="panelBodyEight" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div style="background-image: url('{{ asset('images/31ss/apartments/twobedroom.png') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;
                                        height: 500px;">
                                    </div>
                                    <div style="background-image: url('{{ asset('images/31ss/apartments/website22.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;
                                        height: 450px;">
                                    </div>
                                    <div class="flex-col-c-c py-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <p class="text-custom-light-brown">Two Bedroom
                            <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/Website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span></p><br/>
                    <div style="background-image: url('{{ asset('images/31ss/apartments/twobedroom.png') }}');
                                background-repeat: no-repeat;
                                background-position: left;
                                background-size: 80%;
                                height: 450px;">
                        </div>
                    <div class="flex-col-c-c py-3">
                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                    </div> --}}
                        <div style="background-image: url('{{ asset('images/31ss/apartments/Website1-14.jpg') }}');
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