@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="31 SUDIRMAN SUITES Apartments">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="31 SUDIRMAN SUITES,Property, Office, Residence, Apartment, House">

    <title>31 SUDIRMAN SUITES - APARTMENTS</title>
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
                        <span class="t1-b-1 font-custom-libre-baskerville-bold text-custom-black d-none d-md-block">APARTMENTS</span>
                        <span class="t1-m-5 font-custom-libre-baskerville-bold text-custom-black d-block d-md-none">APARTMENTS</span>
                        <hr class="mx-auto banner-line-width" style="border-bottom: 2px solid #000;"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <div class="container">
    <div id="accordion" class="panel-group">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a href="#panelBodyOne" data-toggle="collapse" data-parent="accordion">
                        Asia
                    </a>
                </h4>
            </div>
            <div id="panelBodyOne" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul>
                        <li>India</li>
                        <li>China</li>
                        <li>Japan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}



<section>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <p class="text-custom-light-brown">
                    <span class="t1-m-2 font-custom-tiempos-light-italic">the
                    </span><br/>
                    <span class="font-custom-tiempos-regular">Site Plan</span><br/>
                </p>
                <div class="flex-col-c-c py-3">
                    <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                </div>
                <div>
                    <div id="accordion" class="panel-group">
                        <div class="panel panel-primary">
                            <div class="panel-heading mb-2">
                                <h4 class="panel-title">
                                    <a href="#panelBodyOne" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                        Ground Floor
                                        <span class="float-r font-custom-avenir-medium">View More &nbsp; <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid">
                                        </span>
                                    </a>
                                </h4>                                                                    
                            </div>
                            <div id="panelBodyOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="w-100 img-responsive3" style="background-image: url('{{ asset('images/31ss/apartments/website1-16.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: contain;">
                                    </div>
                                <div class="pt-5">
                                    <p class="text-custom-light-brown font-custom-tiempos-light">Ground Floor</p><br/>
                                    <div class="flex-col-c-c pb-3">
                                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8 col-md-4">
                                            <span class="text-custom-light-brown pr-3">1</span><span>Commercial Area</span><br/><br/>
                                            <span class="text-custom-light-brown pr-3">2</span><span>Private Suites Foyer</span><br/><br/>
                                            <span class="text-custom-light-brown pr-3">3</span><span>Mailing Room</span><br/><br/>
                                            <span class="text-custom-light-brown pr-3">4</span><span>Pinisi Entrance</span><br/><br/>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="text-custom-light-brown pr-3">5</span><span>Pinisi Lobby</span><br/><br/>
                                            <span class="text-custom-light-brown pr-3">6</span><span>Hyatt Place Drop Off</span><br/><br/>
                                            <span class="text-custom-light-brown pr-3">7</span><span>Hyatt Place Lobby</span><br/><br/>
                                            <span class="text-custom-light-brown pr-3">8</span><span>Hyatt Place Lift</span><br/><br/>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="text-custom-light-brown pr-3">9</span><span>Premier Suites Foyer</span><br/><br/>
                                            <span class="text-custom-light-brown pr-3">10</span><span>Ramp Basement</span><br/><br/>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <p class="text-custom-light-brown">Ground Floor</p><br/>
                    <div style="background-image: url('{{ asset('images/31ss/apartments/website1-16.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: left;
                            background-size: contain;
                            height: 400px;">
                    </div>
                    <div class="pt-5">
                        <p class="text-custom-light-brown">Ground Floor</p><br/>
                        <div class="flex-col-c-c pb-3">
                            <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <span class="text-custom-light-brown pr-3">1</span><span>Commercial Area</span><br/><br/>
                                <span class="text-custom-light-brown pr-3">2</span><span>Private Suites Foyer</span><br/><br/>
                                <span class="text-custom-light-brown pr-3">3</span><span>Mailing Room</span><br/><br/>
                                <span class="text-custom-light-brown pr-3">4</span><span>Pinisi Entrance</span><br/><br/>
                            </div>
                            <div class="col-4">
                                <span class="text-custom-light-brown pr-3">5</span><span>Pinisi Lobby</span><br/><br/>
                                <span class="text-custom-light-brown pr-3">6</span><span>Hyatt Place Drop Off</span><br/><br/>
                                <span class="text-custom-light-brown pr-3">7</span><span>Hyatt Place Lobby</span><br/><br/>
                                <span class="text-custom-light-brown pr-3">8</span><span>Hyatt Place Lift</span><br/><br/>
                            </div>
                            <div class="col-4">
                                <span class="text-custom-light-brown pr-3">9</span><span>Premier Suites Foyer</span><br/><br/>
                                <span class="text-custom-light-brown pr-3">10</span><span>Ramp Basement</span><br/><br/>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="flex-col-c-c py-3">
                    <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                </div>
                <div id="accordion" class="panel-group pb-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="#panelBodyTwo" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                    3rd Floor
                                    <span class="float-r font-custom-avenir-medium">View More &nbsp; <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span>
                                </a>
                            </h4>                                                                    
                        </div>
                        <div class="flex-col-c-c py-3">
                            <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                        </div>
                        <div id="panelBodyTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="mb-3 w-100 img-responsive4" style="background-image: url('{{ asset('images/31ss/apartments/website1-17.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: left;
                                    background-size: contain;">
                                </div>
                        <div>
                            <p class="text-custom-light-brown font-custom-tiempos-light">3rd Floor</p><br/>
                            <div class="flex-col-c-c pb-3">
                                <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                            </div>
                            <div class="row">
                                <div class="col-8 col-md-4">
                                    <span class="text-custom-light-brown pr-3">1</span><span>Kids Club</span><br/><br/>
                                    <span class="text-custom-light-brown pr-3">2</span><span>Multi Purpose Room</span><br/><br/>
                                    <span class="text-custom-light-brown pr-3">3</span><span>Private Suites Lift</span><br/><br/>
                                    <span class="text-custom-light-brown pr-3">4</span><span>Restaurant Kitchen</span><br/><br/>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-custom-light-brown pr-3">5</span><span>Restaurant</span><br/><br/>
                                    <span class="text-custom-light-brown pr-3">6</span><span>Kids Pool</span><br/><br/>
                                    <span class="text-custom-light-brown pr-3">7</span><span>Swimming Pool</span><br/><br/>
                                    <span class="text-custom-light-brown pr-3">8</span><span>Premier Suites  Lift</span><br/><br/>
                                </div>
                                <div class=" col-md-4">
                                    <span class="text-custom-light-brown pr-3">9</span><span>Gym</span><br/><br/>
                                    <span class="text-custom-light-brown pr-3">10</span><span>Hyatt Place Lift</span><br/><br/>
                                    <span class="text-custom-light-brown pr-3">11</span><span>Ramp Basement</span><br/><br/>
                                </div>
                            </div>
                        </div>
                            <div class="flex-col-c-c py-3">
                                <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 w-100 img-responsive2" style="background-image: url('{{ asset('images/31ss/apartments/website1-15.jpg') }}');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: contain;">
                </div>
                {{-- <p class="text-custom-light-brown">3rd Floor</p><br/>
                    <div class="col-8" style="background-image: url('{{ asset('images/31ss/apartments/website1-17.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: contain;
                            height: 400px;">
                    </div>
                    <div>
                        <p class="text-custom-light-brown">3rd Floor</p><br/>
                        <div class="flex-col-c-c pb-3">
                            <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <span class="text-custom-light-brown pr-3">1</span><span>Kids Club</span><br/><br/>
                                <span class="text-custom-light-brown pr-3">2</span><span>Multi Purpose Room</span><br/><br/>
                                <span class="text-custom-light-brown pr-3">3</span><span>Private Suites Lift</span><br/><br/>
                                <span class="text-custom-light-brown pr-3">4</span><span>Restaurant Kitchen</span><br/><br/>
                            </div>
                            <div class="col-4">
                                <span class="text-custom-light-brown pr-3">5</span><span>Restaurant</span><br/><br/>
                                <span class="text-custom-light-brown pr-3">6</span><span>Kids Pool</span><br/><br/>
                                <span class="text-custom-light-brown pr-3">7</span><span>Swimming Pool</span><br/><br/>
                                <span class="text-custom-light-brown pr-3">8</span><span>Premier Suites Lift</span><br/><br/>
                            </div>
                            <div class="col-4">
                                <span class="text-custom-light-brown pr-3">9</span><span>Gym</span><br/><br/>
                                <span class="text-custom-light-brown pr-3">10</span><span>Hyatt Place Lift</span><br/><br/>
                                <span class="text-custom-light-brown pr-3">11</span><span>Ramp Basement</span><br/><br/>
                            </div>
                        </div>
                    </div>
                <div class="flex-col-c-c py-3">
                    <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                </div>
                    <div style="background-image: url('{{ asset('images/31ss/apartments/website1-15.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: contain;
                            height: 400px;">
                    </div> --}}
                <p class="text-custom-light-brown">
                    <span class="t1-m-2 font-custom-tiempos-light-italic">the
                            <a href="{{ route('frontend.apartments.floor') }}">    
                                    {{-- <img src="{{ asset('images/31ss/apartments/website1-35.png') }}" alt="IMG" style="width:130px;" class="img-fluid float-right mt-2"> --}}
                            </a>
                    </span><br/>
                    <span class="font-custom-tiempos-regular">Floor Plan</span><br/>
                </p>
                <div class="flex-col-c-c py-3">
                    <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                </div>
                <div id="accordion" class="panel-group pb-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="#panelBodyThree" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                    Placement
                                    <span class="float-r font-custom-avenir-medium">View More &nbsp; <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span>
                                </a>
                            </h4>                                                                    
                        </div>
                        <div class="flex-col-c-c py-3">
                            <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                        </div>
                        <div id="panelBodyThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="py-5 mb-5 w-100 img-responsive4" style="background-image: url('{{ asset('images/31ss/apartments/v11_floor-plan_nama.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: left;
                                    background-size: contain;">
                                </div>
                                <div class="py-5 mb-5 w-100 img-responsive4" style="background-image: url('{{ asset('images/31ss/apartments/v1_floor-plan_nama.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: left;
                                    background-size: contain;">
                                </div>
                                <div class="flex-col-c-c py-3">
                                <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-5 w-100 img-responsive2" style="background-image: url('{{ asset('images/31ss/apartments/website1-13.jpg') }}');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: contain;">
                </div>
                {{-- <p class="text-custom-light-brown">Placement
                        <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span></p><br/>
                    <div class="py-5 mb-5" style="background-image: url('{{ asset('images/31ss/apartments/website18.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: left;
                            background-size: contain;
                            height: 400px;">
                    </div>
                    <div class="py-5 mb-5" style="background-image: url('{{ asset('images/31ss/apartments/website17.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: left;
                            background-size: contain;
                            height: 400px;">
                    </div>
                <div class="flex-col-c-c py-3">
                    <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                </div>
                    <div style="background-image: url('{{ asset('images/31ss/apartments/website1-13.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: contain;
                            height: 400px;">
                    </div> --}}
                <p class="text-custom-light-brown">
                    <span class="t1-m-2 font-custom-tiempos-light-italic">the
                            <a href="{{ route('frontend.apartments.unit') }}">    
                                <img src="{{ asset('images/31ss/apartments/website1-35.png') }}" alt="IMG" style="width:130px;" class="img-fluid float-right mt-2">
                            </a>
                    </span><br/>
                    <span class="font-custom-tiempos-regular">Unit Plan</span><br/>
                </p>
                <div class="flex-col-c-c py-3">
                    <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                </div>
                <div id="accordion" class="panel-group pb-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="#panelBodyFive" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                    North Private Suites
                                    {{-- <span class="float-r font-custom-avenir-medium">View More &nbsp; <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span> --}}
                                </a>
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
                                    <div class="w-100 img-responsive5 mb-4 d-block d-md-none" style="background-image: url('{{ asset('images/31ss/apartments/north-private-suites-mobile.jpg') }}');
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
                                <a href="#panelBodySix" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                    South Private Suites
                                    {{-- <span class="float-r font-custom-avenir-medium">View More &nbsp; <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span> --}}
                                </a>
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
                                    <div class="w-100 img-responsive5 mb-4 d-block d-md-none" style="background-image: url('{{ asset('images/31ss/apartments/south-private-suites-mobile.jpg') }}');
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
                                <a href="#panelBodyFour" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                    3 Bedroom Premier Suites A, B ,C, D
                                    {{-- <span class="float-r font-custom-avenir-medium">View More &nbsp; <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span> --}}
                                </a>
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
                                    <div class="w-100 img-responsive6 d-block d-md-none" style="background-image: url('{{ asset('images/31ss/apartments/3-bedroom-premier-suites-abcd-mobile.jpg') }}');
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
                                <a href="#panelBodySeven" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                    3 Bedroom Premier Suites E
                                    {{-- <span class="float-r font-custom-avenir-medium">View More &nbsp; <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span> --}}
                                </a>
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
                                    <div class="py-5 w-100 img-responsive6 d-block d-md-none" style="background-image: url('{{ asset('images/31ss/apartments/3-bedroom-premier-suites-e-mobile.jpg') }}');
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
                                <a href="#panelBodyEight" class="text-custom-light-brown font-custom-tiempos-light" data-toggle="collapse" data-parent="accordion">
                                    2 Bedroom Suites
                                    {{-- <span class="float-r font-custom-avenir-medium">View More &nbsp; <img src="{{ asset('images/31ss/apartments/website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span> --}}
                                </a>
                                <div class="flex-col-c-c py-3">
                                    <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
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
                                    <div class="w-100 img-responsive6 d-block d-md-none" style="background-image: url('{{ asset('images/31ss/apartments/2-bedroom-suites-mobile.jpg') }}');
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
                    <div class="m-b-150 w-100 img-responsive2" style="background-image: url('{{ asset('images/31ss/apartments/website1-14.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                    </div>
            </div>
            <div class="col-1"></div>
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

        .img-responsive5{
            height: 773px;
        }

        .img-responsive6{
            height: 723px;
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

