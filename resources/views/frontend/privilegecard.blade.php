@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="31 SUDIRMAN SUITES Privilege Card">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="31 SUDIRMAN SUITES, Property, Office, Residence, Apartment, House">

    <title>31 SUDIRMAN SUITES - PRIVILEGE CARD</title>
@endsection

@section('content')

    <section class="mb-5 banner-margin-top">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="w-100 img-banner-responsive" style="background-image: url('{{ asset('images/31ss/privilegecard/31ss_header.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center px-3">
                            <span class="t1-b-1 font-custom-tiempos-regular text-white d-none d-md-block">PRIVILEGE CARD</span>
                            <span class="t1-m-5 font-custom-tiempos-regular text-white d-block d-md-none">PRIVILEGE CARD</span>
                            <hr class="mx-auto banner-line-width" style="border-bottom: 2px solid #fff;"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-12">

                </div>
                <div class="col-md-10 col-12">
                    <!-- Tab02 -->
                    <div class="text-center">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs mb-3" role="tablist">
                            <li class="nav-item col-6 p-0 tab-nav">
                                <a class="nav-link active nav-custom-box font-custom-tiempos-regular" data-toggle="tab" href="#tenant" role="tab">
                                    <span class="d-none d-md-block">TENANT LIST</span>
                                    <span class="d-block d-md-none">TENANT<br/>LIST</span>
                                </a>
                            </li>

                            <li class="nav-item col-6 p-0 tab-nav">
                                <a class="nav-link nav-custom-box font-custom-tiempos-regular" data-toggle="tab" href="#about" role="tab">
                                    ABOUT PRIVILEGE CARD
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1 col-12">

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="tab-content pb-5">
                <div class="tab-pane fade show active" id="tenant" role="tabpanel">
                    <div class="row mb-5 text-center text-dark">
                        <div class="col-12">
                            <span class="font-custom-avenir-medium" style="font-size: 18px;">Find and enjoy the latest promotions from all participating tenants</span><br/>
                            <span class="font-custom-avenir-medium" style="font-size: 16px;">for Privilege Card holders, only at 31 Sudirman Suites.</span>
                        </div>
                    </div>
                    <div class="row mb-3 text-center">
                        <div class="col-md-1 col-12"></div>
                        <div class="col-md-10 col-12">
                            <span class="font-custom-tiempos-regular" style="font-size: 18px; color: #c38b63;">FOOD & BEVERAGES</span><br/>
                            <hr style="border-bottom: 1px solid #000; margin-top: 0.8rem;"/>
                        </div>
                        <div class="col-md-1 col-12"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-12"></div>
                        <div class="col-md-10 col-12">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="d-flex w-100 tenant-image-container justify-content-center align-items-center">
                                        <img src="{{ asset('images/31ss/privilegecard/31ss_tenant_bistropolis.png') }}" class="tenant-responsive">
                                    </div>
                                    <div class="w-100 mb-3">
                                        <a id="tenant_accordion_1" class="tenant-box font-custom-avenir-medium" data-toggle="collapse" href="#tenant1" role="button" aria-expanded="false" aria-controls="tenant1">
                                            <span>See Privileges</span>
                                            <img src="{{ asset('images/31ss/privilegecard/31ss_close.png') }}" style="display: none; margin: 0 auto;">
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <div class="collapse multi-collapse" id="tenant1">
                                            <div class="text-dark">
                                                15% Discount<br/>
                                                On all Food & Beverages,<br/>
                                                except liquors.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex w-100 tenant-image-container justify-content-center align-items-center">
                                        <img src="{{ asset('images/31ss/privilegecard/31ss_tenant_burger_king.png') }}" class="tenant-responsive">
                                    </div>
                                    <div class="w-100 mb-3">
                                        <a id="tenant_accordion_2" class="tenant-box font-custom-avenir-medium" data-toggle="collapse" href="#tenant2" role="button" aria-expanded="false" aria-controls="tenant1">
                                            <span>See Privileges</span>
                                            <img src="{{ asset('images/31ss/privilegecard/31ss_close.png') }}" style="display: none; margin: 0 auto;">
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <div class="collapse multi-collapse" id="tenant2">
                                            <div class="text-dark">
                                                20% Discount<br/>
                                                For Value Meals / A la Carte purchases.<br/>
                                                Does not apply for other promos or coupons.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex w-100 tenant-image-container justify-content-center align-items-center">
                                        <img src="{{ asset('images/31ss/privilegecard/31ss_tenant_carita.png') }}" class="tenant-responsive">
                                    </div>
                                    <div class="w-100 mb-3">
                                        <a id="tenant_accordion_3" class="tenant-box font-custom-avenir-medium" data-toggle="collapse" href="#tenant3" role="button" aria-expanded="false" aria-controls="tenant1">
                                            <span>See Privileges</span>
                                            <img src="{{ asset('images/31ss/privilegecard/31ss_close.png') }}" style="display: none; margin: 0 auto;">
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <div class="collapse multi-collapse" id="tenant3">
                                            <div class="text-dark">
                                                15% Discount<br/>
                                                For Cake orders.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex w-100 tenant-image-container justify-content-center align-items-center">
                                        <img src="{{ asset('images/31ss/privilegecard/31ss_tenant_golden_asian.png') }}" class="tenant-responsive">
                                    </div>
                                    <div class="w-100 mb-3">
                                        <a id="tenant_accordion_4" class="tenant-box font-custom-avenir-medium" data-toggle="collapse" href="#tenant4" role="button" aria-expanded="false" aria-controls="tenant1">
                                            <span>See Privileges</span>
                                            <img src="{{ asset('images/31ss/privilegecard/31ss_close.png') }}" style="display: none; margin: 0 auto;">
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <div class="collapse multi-collapse" id="tenant4">
                                            <div class="text-dark">
                                                25% Discount<br/>
                                                On all Food & Beverages, in all outlets.<br/>
                                                Only for Privilege Card holder and is not transferable with other people.<br/>
                                                Does not apply on high seasons.

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex w-100 tenant-image-container justify-content-center align-items-center">
                                        <img src="{{ asset('images/31ss/privilegecard/31ss_tenant_koi.png') }}" class="tenant-responsive">
                                    </div>
                                    <div class="w-100 mb-3">
                                        <a id="tenant_accordion_5" class="tenant-box font-custom-avenir-medium" data-toggle="collapse" href="#tenant5" role="button" aria-expanded="false" aria-controls="tenant1">
                                            <span>See Privileges</span>
                                            <img src="{{ asset('images/31ss/privilegecard/31ss_close.png') }}" style="display: none; margin: 0 auto;">
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <div class="collapse multi-collapse" id="tenant5">
                                            <div class="text-dark">
                                                15% Discount<br/>
                                                Minimum transaction of Rp 350.000,-.<br/>
                                                Maximum transaction of Rp 1.000.000,-.<br/>
                                                Do not apply for takeaways, liquors and cigarettes.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex w-100 tenant-image-container justify-content-center align-items-center">
                                        <img src="{{ asset('images/31ss/privilegecard/31ss_tenant_lontar.png') }}" class="tenant-responsive">
                                    </div>
                                    <div class="w-100 mb-3">
                                        <a id="tenant_accordion_6" class="tenant-box font-custom-avenir-medium" data-toggle="collapse" href="#tenant6" role="button" aria-expanded="false" aria-controls="tenant1">
                                            <span>See Privileges</span>
                                            <img src="{{ asset('images/31ss/privilegecard/31ss_close.png') }}" style="display: none; margin: 0 auto;">
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <div class="collapse multi-collapse" id="tenant6">
                                            <div class="text-dark">
                                                15% Discount<br/>
                                                On all Food & Beverages, except liquors.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex w-100 tenant-image-container justify-content-center align-items-center">
                                        <img src="{{ asset('images/31ss/privilegecard/31ss_tenant_pepper.png') }}" class="tenant-responsive">
                                    </div>
                                    <div class="w-100 mb-3">
                                        <a id="tenant_accordion_7" class="tenant-box font-custom-avenir-medium" data-toggle="collapse" href="#tenant7" role="button" aria-expanded="false" aria-controls="tenant1">
                                            <span>See Privileges</span>
                                            <img src="{{ asset('images/31ss/privilegecard/31ss_close.png') }}" style="display: none; margin: 0 auto;">
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <div class="collapse multi-collapse" id="tenant7">
                                            <div class="text-dark">
                                                10% Discount<br/>
                                                Minimum purchase Rp 250.000,- (before tax).
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex w-100 tenant-image-container justify-content-center align-items-center">
                                        <img src="{{ asset('images/31ss/privilegecard/31ss_tenant_sunachi.png') }}" class="tenant-responsive">
                                    </div>
                                    <div class="w-100 mb-3">
                                        <a id="tenant_accordion_8" class="tenant-box font-custom-avenir-medium" data-toggle="collapse" href="#tenant8" role="button" aria-expanded="false" aria-controls="tenant1">
                                            <span>See Privileges</span>
                                            <img src="{{ asset('images/31ss/privilegecard/31ss_close.png') }}" style="display: none; margin: 0 auto;">
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <div class="collapse multi-collapse" id="tenant8">
                                            <div class="text-dark">
                                                15% Discount<br/>
                                                Minimum transaction of Rp 350.000,-.<br/>
                                                Maximum transaction of Rp 1.500.000,-.

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex w-100 tenant-image-container justify-content-center align-items-center">
                                        <img src="{{ asset('images/31ss/privilegecard/31ss_tenant_sunachisuki.png') }}" class="tenant-responsive">
                                    </div>
                                    <div class="w-100 mb-3">
                                        <a id="tenant_accordion_9" class="tenant-box font-custom-avenir-medium" data-toggle="collapse" href="#tenant9" role="button" aria-expanded="false" aria-controls="tenant1">
                                            <span>See Privileges</span>
                                            <img src="{{ asset('images/31ss/privilegecard/31ss_close.png') }}" style="display: none; margin: 0 auto;">
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <div class="collapse multi-collapse" id="tenant9">
                                            <div class="text-dark">
                                                15% Discount<br/>
                                                Minimum transaction of Rp 350.000,-.<br/>
                                                Maximum transaction of Rp 1.500.000,-.<br/>
                                                Do not apply for takeaways, liquors and cigarettes.<br/>
                                                Discount applies only on Sunachi Suki Hotel Claro Makassar and Kendari.

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex w-100 tenant-image-container justify-content-center align-items-center">
                                        <img src="{{ asset('images/31ss/privilegecard/31ss_tenant_sushitei.png') }}" class="tenant-responsive">
                                    </div>
                                    <div class="w-100 mb-3">
                                        <a id="tenant_accordion_10" class="tenant-box font-custom-avenir-medium" data-toggle="collapse" href="#tenant10" role="button" aria-expanded="false" aria-controls="tenant1">
                                            <span>See Privileges</span>
                                            <img src="{{ asset('images/31ss/privilegecard/31ss_close.png') }}" style="display: none; margin: 0 auto;">
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <div class="collapse multi-collapse" id="tenant10">
                                            <div class="text-dark">
                                                10% Discount<br/>
                                                Minimum purchase Rp 250.000,- (before tax).
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex w-100 tenant-image-container justify-content-center align-items-center">
                                        <img src="{{ asset('images/31ss/privilegecard/31ss_tenant_eatery.png') }}" class="tenant-responsive">
                                    </div>
                                    <div class="w-100 mb-3">
                                        <a id="tenant_accordion_11" class="tenant-box font-custom-avenir-medium" data-toggle="collapse" href="#tenant11" role="button" aria-expanded="false" aria-controls="tenant1">
                                            <span>See Privileges</span>
                                            <img src="{{ asset('images/31ss/privilegecard/31ss_close.png') }}" style="display: none; margin: 0 auto;">
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <div class="collapse multi-collapse" id="tenant11">
                                            <div class="text-dark">
                                                25% Discount<br/>
                                                On all Food & Beverages, in all outlets.<br/>
                                                Only for Privilege Card holder and is not transferable with other people.<br/>
                                                Does not apply on high seasons.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-12"></div>
                    </div>
                    <div class="row mt-5 mb-3 text-center">
                        <div class="col-md-1 col-12"></div>
                        <div class="col-md-10 col-12">
                            <span class="font-custom-tiempos-regular" style="font-size: 18px; color: #c38b63;">HOTEL, BAR & LOUNGES</span><br/>
                            <hr style="border-bottom: 1px solid #000; margin-top: 0.8rem;"/>
                        </div>
                        <div class="col-md-1 col-12"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-12"></div>
                        <div class="col-md-10 col-12">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="d-flex w-100 tenant-image-container justify-content-center align-items-center">
                                        <img src="{{ asset('images/31ss/privilegecard/31ss_tenant_baron3.png') }}" class="tenant-responsive">
                                    </div>
                                    <div class="w-100 mb-3">
                                        <a id="tenant_accordion_12" class="tenant-box font-custom-avenir-medium" data-toggle="collapse" href="#tenant12" role="button" aria-expanded="false" aria-controls="tenant1">
                                            <span>See Privileges</span>
                                            <img src="{{ asset('images/31ss/privilegecard/31ss_close.png') }}" style="display: none; margin: 0 auto;">
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <div class="collapse multi-collapse" id="tenant12">
                                            <div class="text-dark">
                                                15% Discount<br/>
                                                On all Food & Beverages, except liquors.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex w-100 tenant-image-container justify-content-center align-items-center">
                                        <img src="{{ asset('images/31ss/privilegecard/31ss_tenant_best_brew.png') }}" class="tenant-responsive">
                                    </div>
                                    <div class="w-100 mb-3">
                                        <a id="tenant_accordion_13" class="tenant-box font-custom-avenir-medium" data-toggle="collapse" href="#tenant13" role="button" aria-expanded="false" aria-controls="tenant1">
                                            <span>See Privileges</span>
                                            <img src="{{ asset('images/31ss/privilegecard/31ss_close.png') }}" style="display: none; margin: 0 auto;">
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <div class="collapse multi-collapse" id="tenant13">
                                            <div class="text-dark">
                                                20% Discount<br/>
                                                For Value Meals / A la Carte purchases.<br/>
                                                Does not apply for other promos or coupons.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex w-100 tenant-image-container justify-content-center align-items-center">
                                        <img src="{{ asset('images/31ss/privilegecard/31ss_tenant_claro.png') }}" class="tenant-responsive">
                                    </div>
                                    <div class="w-100 mb-3">
                                        <a id="tenant_accordion_14" class="tenant-box font-custom-avenir-medium" data-toggle="collapse" href="#tenant14" role="button" aria-expanded="false" aria-controls="tenant1">
                                            <span>See Privileges</span>
                                            <img src="{{ asset('images/31ss/privilegecard/31ss_close.png') }}" style="display: none; margin: 0 auto;">
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <div class="collapse multi-collapse" id="tenant14">
                                            <div class="text-dark">
                                                10% Discount<br/>
                                                Room promos from walk-in rates.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex w-100 tenant-image-container justify-content-center align-items-center">
                                        <img src="{{ asset('images/31ss/privilegecard/31ss_tenant_four_points.png') }}" class="tenant-responsive">
                                    </div>
                                    <div class="w-100 mb-3">
                                        <a id="tenant_accordion_15" class="tenant-box font-custom-avenir-medium" data-toggle="collapse" href="#tenant15" role="button" aria-expanded="false" aria-controls="tenant1">
                                            <span>See Privileges</span>
                                            <img src="{{ asset('images/31ss/privilegecard/31ss_close.png') }}" style="display: none; margin: 0 auto;">
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <div class="collapse multi-collapse" id="tenant15">
                                            <div class="text-dark">
                                                20% Discount<br/>
                                                For room rates, includes breakfast.<br/>
                                                Only for Privilege Card holder and is not transferable with other people.<br/>
                                                Does not apply on high seasons.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex w-100 tenant-image-container justify-content-center align-items-center">
                                        <img src="{{ asset('images/31ss/privilegecard/31ss_tenant_the_rinra.png') }}" class="tenant-responsive">
                                    </div>
                                    <div class="w-100 mb-3">
                                        <a id="tenant_accordion_16" class="tenant-box font-custom-avenir-medium" data-toggle="collapse" href="#tenant16" role="button" aria-expanded="false" aria-controls="tenant1">
                                            <span>See Privileges</span>
                                            <img src="{{ asset('images/31ss/privilegecard/31ss_close.png') }}" style="display: none; margin: 0 auto;">
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <div class="collapse multi-collapse" id="tenant16">
                                            <div class="text-dark">
                                                10% Discount<br/>
                                                For room rates from corporate rates (Rp 900.000,- | Cash Basis).
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-12"></div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="about" role="tabpanel">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img src="{{ asset('images/31ss/privilegecard/31ss_cards.png') }}" class="img-cards-responsive" />
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12 text-center text-cards-responsive">
                            <h2 class="font-custom-libre-baskerville-regular" style="color: #c38b63;">Dearest 31 Sudirman Suites Privilege Card Holder,</h2>
                            <br/>
                            <br/>
                            <p class="font-custom-avenir-medium text-dark">
                                Giving excellent services is our utmost priority. As a token of appreciation, we present to you Privilege Card.<br/>
                                Giving extra value and benefit to our special members, such as various store discounts and<br/>
                                special offers especially catered for you.
                            </p>
                            <br/>
                            <p class="font-custom-avenir-medium text-dark">
                                We would like to thank all our special members and wish that you always have<br/>
                                a great experience in 31 Sudirman Suites.
                            </p>
                        </div>
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
        .t1-b-1{
            font-size: 20px;
            line-height: 1.2;
            letter-spacing: 1px;
        }

        hr{
            margin-top: 0.2rem;
            margin-bottom: 0.2rem;
        }

        .vertical-center {
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .tenant-responsive{
            /*margin: 0 auto;*/
            /*margin: 10px;*/
        }

        .tenant-image-container{
            height: 165px;
        }

        .tenant-box{
            display: block;
            border: 1px solid #000 !important;
            border-radius: 22px !important;
            background-color: #fff;
            color: #c38b63 !important;
            padding: 8px 8px;
            font-size: 14px;
            width: 40%;
            margin: 0 auto;
        }

        .nav-tabs{
            border: none !important;
        }

        .tab-nav {
            border: none !important;
        }

        .nav-link.active.nav-custom-box{
            border-radius: 18px !important;
            background-color: #000;
            margin: 5px;
            color: #c38b63 !important;
            padding: 10px 0;
            font-size: 14px;
        }

        .nav-custom-box{
            border-radius: 18px !important;
            border: 1px solid #000 !important;
            background-color: #fff;
            margin: 5px;
            color: #c38b63 !important;
            padding: 10px 0;
            font-size: 14px;
        }

        .nav-link.nav-custom-box:hover{
            background-color: #000;
            color: #c38b63 !important;
        }

        .img-banner-responsive{
            height: 100px;
        }

        .img-cards-responsive{
            height: 190px;
            width: auto;
        }

        .text-cards-responsive h2{
            font-size: 18px;
        }

        .text-cards-responsive p{
            font-size: 14px;
        }

        @media (min-width: 576px) {

        }

        @media (min-width: 768px) {
            .img-banner-responsive{
                height: 300px;
            }

            .img-cards-responsive{
                height: initial;
            }

            .text-cards-responsive h2{
                font-size: 26px;
            }

            .text-cards-responsive p{
                font-size: 18px;
            }

            .nav-link.active.nav-custom-box{
                font-size: 18px;
            }

            .nav-custom-box{
                font-size: 18px;
            }

            .slider-youtube iframe {
                min-width: 700px;
                height: 400px;
            }
            .video-foreground,
            .video-background iframe {
                width: 100%;
                height: 400px;
                pointer-events: none;
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
    <script type="text/javascript" src="https://www.youtube.com/iframe_api"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>

        $(document).ready(function() {
            $(".slider-youtube iframe").each(function (idx) {
                $(this).addClass("data-idx-" + idx).data("idx", idx);
            });

            function getPlayer (iframe, onPlayerReady, clonned) {
                var $iframe = $(iframe);
                if ($iframe.data((clonned ? "clonned-" : "") + "player")) {
                    var isReady = $iframe.data((clonned ? "clonned-" : "") + "player-ready");
                    if (isReady) {
                        onPlayerReady && onPlayerReady($iframe.data((clonned ? "clonned-" : "") + "player"));
                    }
                    return player;
                }
                else {
                    var player = new YT.Player($iframe.get(0), {
                        events: {
                            'onReady': function () {
                                $iframe.data((clonned ? "clonned-" : "") + "player-ready", true);
                                onPlayerReady && onPlayerReady(player);
                            }
                        }
                    });
                    $iframe.data((clonned ? "clonned-" : "") + "player", player);
                    return player;
                }
            }

            //on first load, play the video
            $(".slider-youtube").on('init', function(event, slick, currentSlide) {
                var currentSlide, player, command;
                currentSlide = $(slick.$slider).find(".slick-current");
                getPlayer(currentSlide.find("iframe"), function (player) {
                    player.playVideo();
                });
            });

            //when new slide displays, play the video
            $(".slider-youtube").on("afterChange", function(event, slick) {
                var currentSlide;
                currentSlide = $(slick.$slider).find(".slick-current");
                getPlayer(currentSlide.find("iframe"), function (player) {
                    player.playVideo();
                });
            });

            function updateClonnedFrames () {
                frames = $(".slider-youtube").find(".slick-slide").not(".slick-cloned").find("iframe");
                frames.each(function () {
                    var frame = $(this);
                    var idx = frame.data("idx");
                    clonedFrames = $(".slider-youtube").find(".slick-cloned .data-idx-" + idx);
                    console.log("clonedFrames", frame, idx, clonedFrames);
                    clonedFrames.each(function () {
                        var clonnedFrame = this;
                        getPlayer(frame[0], function (player) {
                            getPlayer(clonnedFrame, function (clonedPlayer) {
                                console.log("clonnedPlayer", clonedPlayer);
                                clonedPlayer.playVideo();
                                clonedPlayer.seekTo(player.getCurrentTime(), true);
                                setTimeout(function () {
                                    clonedPlayer.pauseVideo();
                                }, 0);
                            }, true);
                        });
                    });
                });
            }

            //reset iframe of non current slide
            $(".slider-youtube").on('beforeChange', function(event, slick, currentSlide) {
                var currentSlide, iframe, clonedFrame;
                currentSlide = $(slick.$slider).find(".slick-current");
                iframe = currentSlide.find("iframe");
                getPlayer(iframe, function (player) {
                    player.pauseVideo();
                    updateClonnedFrames();
                });
            });

            //start the slider
            $('.slider-youtube').slick({
                slidesToShow: 1,
                arrows: false,
                centerMode: true,
                centerPadding: '50px',
                infinite: true,
                variableWidth: true
            });
        });

        @for($i = 1; $i <= 16; $i++)
            $('#tenant{{ $i }}').on('show.bs.collapse', function () {
                $('#tenant_accordion_{{ $i }} span').hide();
                $('#tenant_accordion_{{ $i }}').css('background-color', '#000');
                $('#tenant_accordion_{{ $i }} img').show(300);
            });

            $('#tenant{{ $i }}').on('hide.bs.collapse', function () {
                $('#tenant_accordion_{{ $i }} img').hide();
                $('#tenant_accordion_{{ $i }}').css('background-color', '#fff');
                $('#tenant_accordion_{{ $i }} span').show();
            });
        @endfor

    </script>
@endsection

