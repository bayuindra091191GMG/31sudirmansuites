@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>31 SUDIRMAN SUITES</title>
@endsection

@section('content')

    <!-- Banner -->

    <section class="slider home-top-margin">
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <div id="rev_slider_1" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none;">
                <ul>
                    <!-- Slide 1 -->
                    <li data-transition="slidingoverlayhorizontal">
                        <img src="{{ asset('images/31ss/home/website1-05.jpg') }}" alt="IMG-SLIDE" class="rev-slidebg img-banner-responsive">

                        {{--<h2 class="tp-caption tp-resizeme caption-1 text-uppercase" --}}
                        {{--data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:left;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'--}}
                        {{--data-visibility="['on', 'on', 'on', 'on']"--}}
 {{----}}
                        {{--data-fontsize="['48', '48', '48', '38']" --}}
                        {{--data-lineheight="['58', '58', '58', '58']"--}}
                        {{--data-color="['#FFF']" --}}
                        {{--data-textAlign="['center', 'center', 'center', 'center']"--}}
                     {{----}}
                        {{--data-x="['center']" --}}
                        {{--data-y="['center']" --}}
                        {{--data-hoffset="['0', '0', '0', '0']" --}}
                        {{--data-voffset="['-83', '-83', '-83', '-93']" --}}
                     {{----}}
                        {{--data-width="['1200','992','768','480']"--}}
                        {{--data-height="['auto', 'auto', 'auto', 'auto']" --}}
                        {{--data-whitespace="['normal']" --}}
                     {{----}}
                        {{--data-paddingtop="[0, 0, 0, 0]"--}}
                        {{--data-paddingright="[15, 15, 15, 15]"--}}
                        {{--data-paddingbottom="[0, 0, 0, 0]"--}}
                        {{--data-paddingleft="[15, 15, 15, 15]"--}}

                        {{--data-basealign="slide" --}}
                        {{--data-responsive_offset="off"--}}
                        {{-->BEGIN YOUR CHAPTER</h2>--}}

                        <p class="tp-caption tp-resizeme caption-2" 
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-visibility="['on', 'on', 'on', 'on']"
 
                        data-fontsize="['30', '30', '30', '25']" 
                        data-lineheight="['39', '39', '39', '39']"
                        data-color="['#FFF']" 
                        data-textAlign="['center', 'center', 'center', 'center']"
                     
                        data-x="['center']" 
                        data-y="['center']" 
                        data-hoffset="['0', '0', '0', '0']" 
                        data-voffset="['-13', '-13', '-13', '-13']" 
                     
                        data-width="['1200','992','768','480']"
                        data-height="['auto', 'auto', 'auto', 'auto']" 
                        data-whitespace="['normal']" 
                     
                        data-paddingtop="[0, 0, 0, 0]"
                        data-paddingright="[15, 15, 15, 15]"
                        data-paddingbottom="[0, 0, 0, 0]"
                        data-paddingleft="[15, 15, 15, 15]"

                        data-basealign="slide" 
                        data-responsive_offset="off"
                        >
                            <span class="t1-b-1 font-weight-bold"></span><br/>
                            <span class="t1-b-1 font-weight-bold"></span><br/>
                            <span class="t1-b-1 font-weight-bold color-custom-dark-green"></span>
                        </p>
                    </li>
                </ul>				
            </div>
        </div>
    </section>

    {{-- <section class="mb-3">
        <div class="container">
            <!--  -->
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 col-12">
                    <hr class="mx-auto w-50" style="border-color: #000000;"/>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </section> --}}

    <!-- DEAR FOUNDERS Section -->
    <section class="my-5 py-5">
        <div class="container">
            <!--  -->
            <div class="row justify-content-center">
                <div class="col-2"></div>
                <div class="col-3 text-center">
                    <span class="t1-m-4 font-custom-tiempos-light text-custom-light-brown font-italic">The Vision</span>
                    <br/>
                </div>
                <div class="col-4 text-center text-md-left">
                    <span class="font-custom-tiempos-bold text-custom-light-brown" style="font-size: 15px;">A Beautiful legacy</span><br/>
                    <span class="font-custom-tiempos-medium" style="font-size: 10px;">Our vision is to deliver a beautiful legacy you can savor with your loved ones and
                        to design the life of luxury you deserve in this city that you love.</span>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </section>

    <section class="mb-4 py-5 bg-custom-dark-blue">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5">
                <div class="col-12 text-center">
                    <h1 class="t1-m-4 font-custom-tiempos-light font-italic text-custom-light-brown">
                        <span>The</span><br/>
                        <span>Five Centerpieces</span>
                    </h1>
                </div>
            </div>
            <!-- DESKTOP -->
            <div class="d-none d-md-block">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-0"></div>
                    <div class="col-md-2 mb-md-0 mb-3">
                        <div class="w-100" style="background-image: url('{{ asset('images/31ss/home/website1-06.jpg') }}');
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: contain;
                                height: 250px;">
                            <div class="box h-100 d-flex justify-content-center flex-column text-center px-3">
                                <span class="t1-m-1 custom-font-2">The</span>
                                <span class="t1-m-1 custom-font-1">Prime Address</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-md-0 mb-3">
                        <div class="w-100" style="background-image: url('{{ asset('images/31ss/home/website1-07.jpg') }}');
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: contain;
                                height: 250px;">
                            <div class="box h-100 d-flex justify-content-center flex-column text-center px-3">
                                <span class="t1-m-1 custom-font-2">The</span>
                                <span class="t1-m-1 custom-font-1">Prestige of Service</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-md-0 mb-3">
                        <div class="w-100" style="background-image: url('{{ asset('images/31ss/home/website1-08.jpg') }}');
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: contain;
                                height: 250px;">
                            <div class="box h-100 d-flex justify-content-center flex-column text-center px-3">
                                <span class="t1-m-1 custom-font-2">The</span>
                                <span class="t1-m-1 custom-font-1">Select Community</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-md-0 mb-3">
                        <div class="w-100" style="background-image: url('{{ asset('images/31ss/home/website1-09.jpg') }}');
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: contain;
                                height: 250px;">
                            <div class="box h-100 d-flex justify-content-center flex-column text-center px-3">
                                <span class="t1-m-1 custom-font-2">The</span>
                                <span class="t1-m-1 custom-font-1">State of Art</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-md-0 mb-3">
                        <div class="w-100" style="background-image: url('{{ asset('images/31ss/home/website1-10.jpg') }}');
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: contain;
                                height: 250px;">
                            <div class="box h-100 d-flex justify-content-center flex-column text-center px-3">
                                <span class="t1-m-1 custom-font-2">The</span>
                                <span class="t1-m-1 custom-font-1">Award Winning Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block d-md-none">
                <div class="row justify-content-center mb-5">
                    <div class="col-12">
                        <div class="slider-five-centerpiece mx-3">
                            <div>
                                <div class="mx-auto" style="background-image: url('{{ asset('images/31ss/home/website1-06.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        background-size: contain;
                                        height: 250px;
                                        width: 150px;">
                                    <div class="box h-100 d-flex justify-content-center flex-column text-center px-3">
                                        <span class="t1-m-1 custom-font-2">The</span>
                                        <span class="t1-m-1 custom-font-1">Prime Address</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="mx-auto" style="background-image: url('{{ asset('images/31ss/home/website1-07.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        background-size: contain;
                                        height: 250px;
                                        width: 150px;">
                                    <div class="box h-100 d-flex justify-content-center flex-column text-center px-3">
                                        <span class="t1-m-1 custom-font-2">The</span>
                                        <span class="t1-m-1 custom-font-1">Prestige of Service</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="mx-auto" style="background-image: url('{{ asset('images/31ss/home/website1-08.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        background-size: contain;
                                        height: 250px;
                                        width: 150px;">
                                    <div class="box h-100 d-flex justify-content-center flex-column text-center px-3">
                                        <span class="t1-m-1 custom-font-2">The</span>
                                        <span class="t1-m-1 custom-font-1">Select Community</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="mx-auto" style="background-image: url('{{ asset('images/31ss/home/website1-09.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        background-size: contain;
                                        height: 250px;
                                        width: 150px;">
                                    <div class="box h-100 d-flex justify-content-center flex-column text-center px-3">
                                        <span class="t1-m-1 custom-font-2">The</span>
                                        <span class="t1-m-1 custom-font-1">State of Art</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="mx-auto" style="background-image: url('{{ asset('images/31ss/home/website1-10.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        background-size: contain;
                                        height: 250px;
                                        width: 150px;">
                                    <div class="box h-100 d-flex justify-content-center flex-column text-center px-3">
                                        <span class="t1-m-1 custom-font-2">The</span>
                                        <span class="t1-m-1 custom-font-1">Award Winning Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-12">
                    <div class="five-slider align-content-center mx-3">
                        <div class="text-center">
                            <div class="mb-4">
                                <span class="t1-m-4 font-custom-tiempos-light text-custom-light-brown font-italic">At The Center of It All</span>
                            </div>
                            <div>
                                <p class="text-white mb-5">
                                    Location on the heart of Makassar city at Jalan Jendral Sudirman 31, experience<br/>
                                    prestigious living in the most spacious, most luxurious, and most exclusive<br/>
                                    development at the center of it all.
                                </p>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="mb-4">
                                <span class="t1-m-4 font-italic text-custom-light-brown">Lorem ipsum 2</span>
                            </div>
                            <div>
                                <p class="text-white mb-5">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, reiciendis.<br/>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, quidem!<br/>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, deserunt!
                                </p>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="mb-4">
                                <span class="t1-m-4 font-italic text-custom-light-brown">Lorem ipsum 3</span>
                            </div>
                            <div>
                                <p class="text-white mb-5">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, reiciendis.<br/>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, quidem!<br/>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, deserunt!
                                </p>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="mb-4">
                                <span class="t1-m-4 font-italic text-custom-light-brown">Lorem ipsum 4</span>
                            </div>
                            <div>
                                <p class="text-white mb-5">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, reiciendis.<br/>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, quidem!<br/>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, deserunt!
                                </p>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="mb-4">
                                <span class="t1-m-4 font-italic text-custom-light-brown">Lorem ipsum 5</span>
                            </div>
                            <div>
                                <p class="text-white mb-5">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, reiciendis.<br/>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, quidem!<br/>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, deserunt!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <section class="mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="w-100 img-map-responsive" style="background-image: url('{{ asset('images/31ss/home/31ss-02.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: contain;"></div>
                </div>
            </div>
        </div>    
    </section>

    <section class="mb-3 py-5 bg-custom-dark-blue">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    {{-- <img src="{{ asset('images/31ss/home/bythose.PNG') }}"> --}}
                    <span class="t1-s-4 text-custom-light-brown font-custom-tiempos-medium-italic">By those who know them best</span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-12">
                    <div class="row">
                        <div class="col-md-4 col-4 text-center">
                            <span class="text-white">Developed by</span>
                        </div>
                        <div class="col-md-4 col-4 text-center">
                            <span class="text-white">Hotel Management by</span>
                        </div>
                        <div class="col-md-4 col-4 text-center">
                            <span class="text-white">Designed by</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-12">
                    <div class="row">
                        <div class="col-md-4 col-4 text-center">
                            <img src="{{ asset('images/31ss/home/website1-16.png') }}" alt="IMG" class="img-fluid">
                        </div>
                        <div class="col-md-4 col-4 text-center">
                            <img src="{{ asset('images/31ss/home/website1-17.png') }}" alt="IMG" class="img-fluid">
                        </div>
                        <div class="col-md-4 col-4 text-center">
                            <img src="{{ asset('images/31ss/home/website1-18.png') }}" alt="IMG" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <span class="t1-s-4 text-custom-light-brown font-custom-tiempos-medium-italic">From the award-winning developer who brought you</span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-12">
                    <div class="row">
                        <div class="col-md-4 col-4 text-center">
                            <img src="{{ asset('images/31ss/home/website1-19.png') }}" alt="IMG" class="img-fluid">
                        </div>
                        <div class="col-md-4 col-4 text-center">
                            <img src="{{ asset('images/31ss/home/website1-20.png') }}" alt="IMG" class="img-fluid">
                        </div>
                        <div class="col-md-4 col-4 text-center">
                            <img src="{{ asset('images/31ss/home/website1-21.png') }}" alt="IMG" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3 col-6 text-center">
                    <img src="{{ asset('images/31ss/home/website1-22.png') }}" alt="IMG" class="img-fluid" style="height: 60px;">
                </div>
                <div class="col-md-3 col-6 text-center">
                    <img src="{{ asset('images/31ss/home/website1-23.png') }}" alt="IMG" class="img-fluid" style="height: 50px;">
                </div>
                <div class="col-md-3 "></div>
            </div>
        </div>
    </section>

    <section class="py-5 px-5 p-b-50">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4 col-12 mb-3 mb-md-0">
                    <div class="row mb-5">
                        <div class="col-12 text-center text-md-left">
                            <div class="pb-1">
                                <span class="text-custom-light-brown font-italic t1-m-1" style="font-size: 30px;">Latest News</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 pl-5" id="list_latest_new">
                        <ul>
                            @foreach($news as $new)
                                <li>
                                    <div style="margin-top: -25px;">
                                        <span class="pb-1 text-custom-light-brown font-custom-tiempos-medium">{{$new->created_at_front_end_formatted}}</span><br/>
                                        <span>{{ $new->title }}</span><br/>
                                        <a href="{{ route('frontend.news_detail', ['slug' => $new->blog]) }}" class="text-custom-light-brown font-custom-avenir-medium" style="text-decoration: underline;">
                                            READ MORE
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>


                </div>
                <div class="col-md-4 col-12 text-center">
                    <div class="w-100" style="background-image: url('{{ asset('images/31ss/video.png') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: contain;
                            height: 200px;">
                    </div>
{{--                    <div class="embed-responsive embed-responsive-16by9">--}}
{{--                        <iframe class="embed-responsive-item" src="{{url('https://www.youtube.com/embed/6eEZ7DJMzuk')}}" frameborder="0" allowfullscreen></iframe>--}}
{{--                    </div>--}}
                </div>
                <div class="col-md-2"></div>
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
            font-size: 14px;
            color: sandybrown;
        }

        .slick-dots li button:before{
            font-size: 14px;
            color: sandybrown;
        }

        .home-top-margin{
            margin-top: 0;
        }

        .img-banner-responsive{
            height: 100px;
        }

        .img-map-responsive{
            height: 250px;
        }

        #list_latest_new li{
            margin-bottom: 2rem;
        }

        #list_latest_new li:last-child{
            margin-bottom: 0;
        }

        #list_latest_new li::before{
            content: "\2022";  /* Add content: \2022 is the CSS Code/unicode for a bullet */
            color: #c38b63; /* Change the color */
            font-size: 25px;
            font-weight: bold; /* If you want it to be bold */
            line-height: 0.5rem;
            display: inline-block; /* Needed to add space between the bullet and the text */
            width: 1em; /* Also needed for space (tweak if needed) */
            margin-left: -1em; /* Also needed for space (tweak if needed) */
        }

        .img-fluid{
            max-width: 100%;
        }

        @media (min-width: 576px) {

        }

        @media (min-width: 768px) {
            .img-fluid{
                max-width: 80%;
            }

            .home-top-margin{
                margin-top: -100px;
            }

            .img-banner-responsive{
                height: 500px;
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