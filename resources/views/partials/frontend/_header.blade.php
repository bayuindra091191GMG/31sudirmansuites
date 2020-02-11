<!-- Header -->
<header>
    <div class="d-none d-md-block">
        <nav class="container-header-desktop" id="header-sticky" >
            <div class="wrap-menu-desktop" @if(Route::currentRouteName() == 'home') style="background-color: rgba(0,0,0,0.4)" @else style="background-color: #ffffff" @endif>
                <div class="limiter-menu-desktop container-fluid" style="padding-left: 8rem; padding-right: 8rem">
                <!-- Logo desktop -->
                    <div class="w-100 pb-3 mt-5 @if(Route::currentRouteName() == 'home') header-border-white @else header-border-light-brown @endif">
                        <div class="logo" style="height: 100%;">
                            <a href="{{ route('home') }}"><img src="{{ asset('images/31ss/website1-05.png') }}" alt="LOGO" style="width: auto; height: auto;"></a>
                        </div>
                    </div>
                </div>
                <div class="limiter-menu-desktop container-fluid" style="padding-left: 8rem; padding-right: 8rem; @if(Route::currentRouteName() == 'home') background-color: rgba(0,0,0,0.4) @else background-color: #ffffff @endif">


                    <!-- Menu desktop -->
                    <div class="menu-desktop pt-4">
                        <ul class="main-menu respon-sub-menu left">
                            <li>
                                <a class="font-custom-tiempos-regular menu-font-style2 @if(Route::currentRouteName() == 'home') text-white @else text-black @endif" href="{{ route('home') }}">HOME</a>
                            </li>
                            <li>
                                <a class="font-custom-tiempos-regular menu-font-style2 @if(Route::currentRouteName() == 'home') text-white @else text-black @endif" href="{{ route('frontend.apartments') }}">APARTMENTS</a>
                                {{-- <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu" style="z-index:9999;">
                                    <li><a href="{{ route('frontend.apartments.site') }}" class="font-custom-tiempos-light">Site Plan</a></li>
                                    <li><a href="{{ route('frontend.apartments.floor') }}" class="font-custom-tiempos-light">Floor Plan</a></li>
                                    <li><a href="{{ route('frontend.apartments.unit') }}" class="font-custom-tiempos-light">Unit Plan</a></li>
                                </ul> --}}
                            </li>
                            <li>
                                <a class="font-custom-tiempos-regular menu-font-style2 @if(Route::currentRouteName() == 'home') text-white @else text-black @endif" href="{{ route('frontend.hotel') }}">HOTEL</a>
                            </li>
                            <li>
                                <a class="font-custom-tiempos-regular menu-font-style2 @if(Route::currentRouteName() == 'home') text-white @else text-black @endif" href="{{ route('frontend.news') }}">NEWS</a>
                            </li>

                            <li>
                                <a class="font-custom-tiempos-regular menu-font-style2 @if(Route::currentRouteName() == 'home') text-white @else text-black @endif" href="{{ route('frontend.gallery') }}">GALLERY</a>
                            </li>

                            <li>
                                <a class="font-custom-tiempos-regular menu-font-style2 @if(Route::currentRouteName() == 'home') text-white @else text-black @endif" href="{{ route('frontend.privilegecard') }}" >PRIVILEGE CARD</a>
                            </li>

                            <li>
                                <a class="font-custom-tiempos-regular menu-font-style2 @if(Route::currentRouteName() == 'home') text-white @else text-black @endif" href="{{ route('frontend.contact_us') }}" >CONTACT US</a>
                            </li>

                            <li>
                                <a class="font-custom-tiempos-regular menu-font-style2 @if(Route::currentRouteName() == 'home') text-white @else text-black @endif" href="https://360.kunkun3dvr.com/sudirmansuites/" >VR UNIT TOUR </a>
                            </li>
                        </ul>

                        <ul class="main-menu respon-sub-menu right" style="position: absolute; right: 8rem;">
                            <li>
                                <input type="text" id="header_search" class="form-control p-3" placeholder="Search..."/>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Header Mobile -->
    <nav class="container-header-mobile">
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="{{ route('home') }}"><img src="{{ asset('images/31ss/website1-05.png') }}" alt="LOGO"></a>
            </div>


            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>

        <div class="menu-mobile">
            <ul class="main-menu" style="background-color: #000 !important;">
                <li>
                    <a class="font-custom-tiempos-regular text-white" href="{{ route('home') }}">HOME</a>
                </li>

                <li>
                        <a class="font-custom-tiempos-regular text-white" href="{{ route('frontend.apartments') }}">APARTMENTS</a>
                        {{-- <ul class="sub-menu" style="z-index:9999;">
                                <li><a href="{{ route('frontend.apartments.site') }}" class="font-custom-tiempos-light text-black">Site Plan</a></li>
                                <li><a href="{{ route('frontend.apartments.floor') }}" class="font-custom-tiempos-light text-black">Floor Plan</a></li>
                                <li><a href="{{ route('frontend.apartments.unit') }}" class="font-custom-tiempos-light text-black">Unit Plan</a></li>
                            </ul> --}}
                    </li>

                <li>
                    <a class="font-custom-tiempos-regular text-white" href="{{ route('frontend.hotel') }}">HOTEL</a>
                </li>

                <li>
                    <a class="font-custom-tiempos-regular text-white" href="{{ route('frontend.news') }}">NEWS</a>
                </li>

                <li>
                    <a class="font-custom-tiempos-regular text-white" href="{{ route('frontend.gallery') }}">GALLERY</a>
                </li>

                <li>
                    <a class="font-custom-tiempos-regular text-white" href="{{ route('frontend.privilegecard') }}">PRIVILEGE CARD</a>
                </li>

                <li>
                    <a class="font-custom-tiempos-regular text-white" href="{{ route('frontend.contact_us') }}">CONTACT US</a>
                </li>

                <li>
                    <a class="font-custom-tiempos-regular text-white" href="https://360.kunkun3dvr.com/sudirmansuites/" >VR UNIT TOUR</a>
                </li>
            </ul>
        </div>
    </nav>

    <div>
{{--        <a href="#" class="float">--}}
        <a href="https://wa.me/{{$randomNumber}}?text=Halo%2031Sudirman%20Suites%20Saya%20ingin%20bertanya." target="_blank" class="float">
            <img src="{{ asset('images/31ss/wa-logo-thumb.png') }}" alt="IMG" class="fa my-float w-100">
        </a>
    </div>
</header>

<style>
    .float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        /*background-color:#38b91e;*/
        color:#000;
        border-radius:50px;
        text-align:center;
        /*box-shadow: 2px 2px 3px #999;*/
        z-index: 99999999;
    }

    .my-float{
        margin-top: 1px;
    }

    @if(Route::currentRouteName() == 'home')
        .menu-desktop .main-menu .sub-menu li{
            background-color: #000;
        }

        .menu-desktop .main-menu .sub-menu li a {
            color: #fff;
        }

        .menu-desktop .main-menu > li > a {
            color: #fff;
        }

        .menu-desktop .main-menu > li:hover > a {
            color: #fff;
        }
    @else
        .menu-desktop .main-menu .sub-menu li{
            background-color: #ffffff;
        }

        .menu-desktop .main-menu .sub-menu li a {
            color: #c38b63;
        }

        .menu-desktop .main-menu > li > a {
            color: #c38b63;
        }

        .menu-desktop .main-menu > li:hover > a {
            color: #c38b63;
        }
    @endif
</style>
