@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>31 SUDIRMAN SUITES</title>
@endsection

@section('content')

    <!-- Banner -->

    <section class="slider" style="margin-top:-100px;">
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <div id="rev_slider_1" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none;">
                <ul>
                    <!-- Slide 1 -->
                    <li data-transition="slidingoverlayhorizontal">
                        <img src="{{ asset('images/31ss/home/Website1-05.jpg') }}" alt="IMG-SLIDE" class="rev-slidebg" style="height: 500px;">

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
                    <span class="t1-m-1 text-custom-light-brown font-italic" style="font-size: 30px;">The Vision</span>
                    <br/>
                </div>
                <div class="col-4 text-center text-md-left">
                    <span class="text-custom-light-brown font-weight-bold" style="font-size: 15px;">A Beautiful legacy</span><br/>
                    <span style="font-size: 10px;">Our vision is to deliver a beautiful legacy you can savor with your loved ones and
                        to design the life of luxury you deserve in this city that you love.</span>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </section>

    <section class="mb-md-0 mb-4 d-none d-md-block">
        <div class="container-fluid py-md-5 py-2 bg-1">
            <!--  -->
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1 class="t1-m-1 font-italic text-custom-light-brown" style="font-size:30px !important;">
                        <span>The</span><br/>
                        <span>Five Centerpieces</span>
                    </h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-0"></div>
                <div class="col-md-2 mb-md-0 mb-3">
                    <div class="w-100" style="background-image: url('{{ asset('images/31ss/home/Website1-06.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: contain;
                            height: 400px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-m-1 custom-font-2">The</span>
                            <span class="t1-m-1 custom-font-1">Prime Address</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-md-0 mb-3">
                    <div class="w-100" style="background-image: url('{{ asset('images/31ss/home/Website1-07.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: contain;
                            height: 400px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-m-1 custom-font-2">The</span>
                            <span class="t1-m-1 custom-font-1">Prestige of Service</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-md-0 mb-3">
                    <div class="w-100" style="background-image: url('{{ asset('images/31ss/home/Website1-08.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: contain;
                            height: 400px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-m-1 custom-font-2">The</span>
                            <span class="t1-m-1 custom-font-1">Select Community</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-md-0 mb-3">
                    <div class="w-100" style="background-image: url('{{ asset('images/31ss/home/Website1-09.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: contain;
                            height: 400px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-m-1 custom-font-2">The</span>
                            <span class="t1-m-1 custom-font-1">State of Art</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-md-0 mb-3">
                    <div class="w-100" style="background-image: url('{{ asset('images/31ss/home/Website1-10.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: contain;
                            height: 400px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-m-1 custom-font-2">The</span>
                            <span class="t1-m-1 custom-font-1">Award Winning Developer</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row d-none d-md-block">
                        <div class="col-12 pt-4">
                            <div class="five-slider align-content-center">
                                <div><span class="t1-m-1 font-italic text-custom-light-brown">At The Center of It All</span>
                                    <p><span class="text-white">Location on the heart of Makassar city at Jalan Jendral Sudirman 31, experience<br/>
                                            prestigious living in the most spacious, most luxurious, and most exclusive<br/>
                                            development at the center of it all.</span>
                                    </p>    
                                </div>
                                <div><span class="t1-m-1 font-italic text-custom-light-brown">Lorem ipsum 2</span>
                                    <p><span class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, reiciendis.<br/>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, quidem!<br/>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, deserunt!</span>
                                    </p>    
                                </div>
                                <div><span class="t1-m-1 font-italic text-custom-light-brown">Lorem ipsum 3</span>
                                    <p><span class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, reiciendis.<br/>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, quidem!<br/>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, deserunt!</span>
                                    </p>    
                                </div>
                                <div><span class="t1-m-1 font-italic text-custom-light-brown">Lorem ipsum 4</span>
                                    <p><span class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, reiciendis.<br/>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, quidem!<br/>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, deserunt!</span>
                                    </p>    
                                </div>
                                <div><span class="t1-m-1 font-italic text-custom-light-brown">Lorem ipsum 5 </span>
                                    <p><span class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, reiciendis.<br/>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, quidem!<br/>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, deserunt!</span>
                                    </p>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 px-5">
        <div class="container">
            <div class="py-2">
                <div class="col-12">
                    <div class="w-100 bg-approach-1-responsive" style="background-image: url('{{ asset('images/31ss/home/31ss-02.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: contain;
                            height: 650px;"></div>
                            
                </div>
                
            </div>
            {{-- <div class="row mb-3">
                <div class="col-md-6 col-12 mb-3 mb-md-0">
                    <div class="w-100 bg-approach-2-responsive" style="background-image: url('{{ asset('images/salt/home/home-4.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-b-1 text-white custom-font-1">Partners</span>
                            <a href="{{ route('frontend.partners.mainpartners') }}" class="btn btn-default mx-auto w-50 px-5 py-3 mt-3 text-dark font-weight-bold" style="border-radius: 0; background-color: #fff;">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="w-100 bg-approach-2-responsive" style="background-image: url('{{ asset('images/salt/home/home-5.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-b-1 text-white custom-font-1">Credentials</span>
                            <a href="{{ route('frontend.credentials') }}" class="btn btn-default mx-auto w-50 px-5 py-3 mt-3 text-dark font-weight-bold" style="border-radius: 0; background-color: #fff;">Read More</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>    
    </section>
        <div class="pb-5 mb-5" style="background-color: #292929">
            <div class="row">
                <div class="col-12 text-center pt-5 pb-4">
                        {{-- <img src="{{ asset('images/31ss/home/bythose.PNG') }}"> --}}
                    <span class= "text-custom-light-brown font-italic t1-m-1" style="font-size: 20px;">By those who know them best</span>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-3"></div>
                <div class="col text-center font-weight-bold">
                    <span class="text-white">Developed by</span>
                </div>
                <div class="col text-center font-weight-bold">
                    <span class="text-white">Hotel Management by</span>
                </div>
                <div class="col text-center font-weight-bold">
                    <span class="text-white">Designed by</span>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row pb-3">
                <div class="col-3"></div>
                <div class="col text-center">
                    <img src="{{ asset('images/31ss/home/Website1-16.png') }}" alt="IMG" style="width:100px;" class="img-fluid"> 
                </div>
                    <div class="col text-center pt-1">
                    <img src="{{ asset('images/31ss/home/Website1-17.png') }}" alt="IMG" style="width:120px;" class="img-fluid">
                </div>
                <div class="col text-center">
                    <img src="{{ asset('images/31ss/home/Website1-18.png') }}" alt="IMG" style="width:100px;" class="img-fluid">
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row py-3">
                <div class="col-12 text-center">
                    <span class= "text-custom-light-brown font-italic t1-m-1" style="font-size: 20px;">From the award-winning developer who brought you</span>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-3"></div>
                <div class="col text-center">
                    <img src="{{ asset('images/31ss/home/Website1-19.png') }}" alt="IMG" style="width:150px;" class="img-fluid"> 
                </div>
                    <div class="col text-center">
                    <img src="{{ asset('images/31ss/home/Website1-20.png') }}" alt="IMG" style="width:180px;" class="img-fluid">
                </div>
                <div class="col text-center">
                    <img src="{{ asset('images/31ss/home/Website1-21.png') }}" alt="IMG" style="width:100px;" class="img-fluid">
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col text-center">
                    <img src="{{ asset('images/31ss/home/Website1-22.png') }}" alt="IMG" style="width:120px;" class="img-fluid">
                </div>
                <div class="col text-center">
                    <img src="{{ asset('images/31ss/home/Website1-23.png') }}" alt="IMG" style="width:150px;" class="img-fluid">
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    <section class="py-5 px-5 p-b-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <br/>
                </div>
                <div class="col">
                    <div class="pb-1"><span class="text-custom-light-brown font-italic t1-m-1" style="font-size: 30px;">Latest News</span></div><br/>
                    <span class="pb-1 text-custom-light-brown font-weight-bold">January 1st, 2019</span><br/>
                    <span>Lorem ipsum dolor sit amet,</span><br/>
                    <a href="{{ route('frontend.news_detail') }}" class="text-custom-light-brown">
                            READ MORE
                    </a><br/><br/>
                    <span class="pb-1 text-custom-light-brown font-weight-bold">January 1st, 2019</span><br/>
                    <span>Lorem ipsum dolor sit amet,</span><br/>
                    <a href="{{ route('frontend.news_detail') }}" class="text-custom-light-brown">
                            READ MORE
                    </a>
                </div>
                <div class="col text-center">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{url('https://www.youtube.com/embed/6eEZ7DJMzuk')}}" frameborder="0" allowfullscreen></iframe>
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
        .img-banner-responsive{
            height: 500px;
        }

        .bg-dear-founder-responsive{
            height: 220px;
        }

        .bg-approach-1-responsive{
            height: 300px;
        }

        .bg-approach-2-responsive{
            height: 200px;
        }

        .slick-prev:before,
        .slick-next:before {
            color: black;
        }

        @media (min-width: 576px) {

        }

        @media (min-width: 768px) {
            .img-banner-responsive{
                height: 550px;
            }

            .bg-approach-1-responsive{
                height: 400px;
            }

            .bg-approach-2-responsive{
                height: 400px;
            }

            .bg-dear-founder-responsive{
                height: 480px;
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

        $(".five-slider").slick({
            dots: true,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
        });
    </script>
@endsection