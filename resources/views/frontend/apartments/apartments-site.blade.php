@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>APARTMENTS - SITE PLAN</title>
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
                        <span class="font-weight-bold">Site Plan</span><br/>
                    </p>
                    <div class="flex-col-c-c py-3">
                        <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                    </div>
                    <div>
                        <div id="accordion" class="panel-group">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodyOne" class="text-custom-light-brown" data-toggle="collapse" data-parent="accordion">
                                            Ground Floor
                                            <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/Website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span>
                                        </a>
                                    </h4>                                                                    
                                </div>
                                <div id="panelBodyOne" class="panel-collapse collapse">
                                    <div class="panel-body">
                                            <div style="background-image: url('{{ asset('images/31ss/apartments/Website1-16.jpg') }}');
                                                background-repeat: no-repeat;
                                                background-position: left;
                                                background-size: contain;
                                                height: 550px;">
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
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <p class="text-custom-light-brown">Ground Floor</p><br/>
                        <div style="background-image: url('{{ asset('images/31ss/apartments/Website1-16.jpg') }}');
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
                                    <a href="#panelBodyTwo" class="text-custom-light-brown" data-toggle="collapse" data-parent="accordion">
                                        3rd Floor
                                        <span class="float-r">View More <img src="{{ asset('images/31ss/apartments/Website1-34.png') }}" alt="IMG" style="width:18px;" class="img-fluid"></span>
                                    </a>
                                </h4>                                                                    
                            </div>
                            <div class="flex-col-c-c py-3">
                                <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
                            </div>
                            <div id="panelBodyTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="w-100" style="background-image: url('{{ asset('images/31ss/apartments/Website1-17.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: left;
                                        background-size: cover;
                                        height: 500px;">
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
                                        <span class="text-custom-light-brown pr-3">8</span><span>Premier Suites  Lift</span><br/><br/>
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
                                </div>
                            </div>
                        </div>
                    </div>
                                <div style="background-image: url('{{ asset('images/31ss/apartments/Website1-15.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    background-size: contain;
                                    height: 400px;">
                                </div>
                </div>
        </div>                    
</section>


@endsection