<!-- Header -->
<header>
    <div class="d-none d-md-block">
        <nav class="container-header-desktop" id="header-sticky">
            <div class="wrap-menu-desktop" style="background-color: rgba(0,0,0,0.4)">
                <div class="limiter-menu-desktop container">
                <!-- Logo desktop -->
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('images/31ss/Website1-05.png') }}" alt="LOGO" style="width: auto; height: auto;"></a>
                    </div>
                </div>
                <div class="limiter-menu-desktop container" style="background-color: rgba(0,0,0,0.4)">
                    

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu respon-sub-menu">
                            <li>
                                <a class="font-custom-tiempos-light menu-font-style2" href="{{ route('home') }}">HOME</a>
                            </li>
                            <li>
                                <a class="font-custom-tiempos-medium menu-font-style2" href="{{ route('frontend.apartments') }}">APARTMENTS</a>
                                <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu" style="z-index:9999;">
                                    <li><a href="{{ route('frontend.apartments.site') }}" class="font-custom-tiempos-light font-weight-bold">Site Plan</a></li>
                                    <li><a href="{{ route('frontend.apartments.floor') }}" class="font-custom-tiempos-light font-weight-bold">Floor Plan</a></li>
                                    <li><a href="{{ route('frontend.apartments.unit') }}" class="font-custom-tiempos-light font-weight-bold">Unit Plan</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="font-custom-tiempos-light menu-font-style2" href="{{ route('frontend.hotel') }}">HOTEL</a>
                            </li>
                            <li>
                                <a class="font-custom-tiempos-light menu-font-style2" href="{{ route('frontend.news') }}">NEWS</a>
                            </li>

                            <li>
                                <a class="font-custom-tiempos-light menu-font-style2" href="{{ route('frontend.contact_us') }}" >CONTACT US</a>
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
                <a href="{{ route('home') }}"><img src="{{ asset('images/31ss/Website1-05.png') }}" alt="LOGO"></a>
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
                    <a class="font-custom-tiempos-light text-white" href="{{ route('home') }}">HOME</a>
                </li>

                <li>
                        <a class="font-custom-tiempos-light text-white" href="{{ route('frontend.apartments') }}">APARTMENTS</a>
                        <ul class="sub-menu" style="z-index:9999;">
                                <li><a href="{{ route('frontend.apartments.site') }}" class="font-custom-tiempos-light text-black">Site Plan</a></li>
                                <li><a href="{{ route('frontend.apartments.floor') }}" class="font-custom-tiempos-light text-black">Floor Plan</a></li>
                                <li><a href="{{ route('frontend.apartments.unit') }}" class="font-custom-tiempos-light text-black">Unit Plan</a></li>
                            </ul>
                    </li>

                <li>
                    <a class="font-custom-tiempos-light text-white" href="{{ route('frontend.hotel') }}">HOTEL</a>
                </li>

                <li>
                    <a class="font-custom-tiempos-light text-white" href="{{ route('frontend.news') }}">NEWS</a>
                </li>

                <li>
                    <a class="font-custom-tiempos-light text-white" href="{{ route('frontend.contact_us') }}">CONTACT US</a>
                </li>
            </ul>
        </div>
    </nav>
</header>