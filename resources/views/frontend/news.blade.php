@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>31 SUDIRMAN SUITES - NEWS</title>
@endsection

@section('content')

<section class="bg-0 flex-wr-s-st m-b-15-sr991">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="w-100 img-banner-responsive" style="background-image: url('{{ asset('images/31ss/news/Website 31ss 2-04.jpg') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;">
            </div>    
        </div>    
    </div>
</section>

<!-- Content -->
        <div class="bg-0 p-t-95 p-b-50 px-5">
            <div class="container">             
                <div class="row isotope-grid">
                    <div class="col-sm-6 col-lg-4 p-b-50 isotope-item business-n">
                        <div class="bg-0 h-full">
                            <a href="{{ route('frontend.news_detail') }}" class="hov-img0 of-hidden">
                                <img src="{{ asset('images/31ss/news/Website 31ss 2-05.jpg') }}" alt="IMG">
                            </a>

                            <div class="bg-0 p-t-26">
                                <h4 class="p-b-12">
                                    <a href="{{ route('frontend.news_detail') }}" class="t1-m-1 cl-3 hov-link2 trans-02 text-custom-light-brown">
                                        Lorem Ipsum Dolor Sit Amet
                                    </a>
                                    <div class="py-2">
                                        <div class="bg-3 bg-custom-light-brown" style="width: 15%; height: 1px;"></div>
                                    </div>
                                </h4>

                                {{-- <div class="flex-wr-s-c p-b-9">
                                    <div class="p-r-20">
                                        <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                        <span class="t1-s-2 cl-7">
                                            Nov 10 , 2017
                                        </span>
                                    </div>

                                    <div class="p-l-20 bo-l-1 bcl-12">
                                        <i class="fs-14 cl-7 fa fa-user m-r-2"></i>

                                        <a href="#" class="t1-s-2 cl-11 hov-link3">
                                            Admin
                                        </a>
                                    </div>
                                </div> --}}

                                <p class="t1-s-2 cl-6 p-b-20">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit similique omnis perspiciatis voluptate earum consectetur quo cum qui reiciendis fugiat!
                                </p>

                                {{-- <a href="news-detail.html" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">
                                    Read More
                                </a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 p-b-50 isotope-item business-n training-n">
                        <div class="bg-0 h-full">
                            <a href="{{ route('frontend.news_detail') }}" class="hov-img0 of-hidden">
                                <img src="{{ asset('images/31ss/news/Website 31ss 2-06.jpg') }}" alt="IMG">
                            </a>

                            <div class="bg-0 p-t-26">
                                <h4 class="p-b-12">
                                    <a href="{{ route('frontend.news_detail') }}" class="t1-m-1 cl-3 hov-link2 trans-02 text-custom-light-brown">
                                        Lorem Ipsum Dolor Sit Amet
                                    </a>
                                    <div class="py-2">
                                        <div class="bg-3 bg-custom-light-brown" style="width: 15%; height: 1px;"></div>
                                    </div>
                                </h4>

                                {{-- <div class="flex-wr-s-c p-b-9">
                                    <div class="p-r-20">
                                        <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                        <span class="t1-s-2 cl-7">
                                            Nov 22 , 2017
                                        </span>
                                    </div>

                                    <div class="p-l-20 bo-l-1 bcl-12">
                                        <i class="fs-14 cl-7 fa fa-user m-r-2"></i>

                                        <a href="#" class="t1-s-2 cl-11 hov-link3">
                                            Admin
                                        </a>
                                    </div>
                                </div> --}}

                                <p class="t1-s-2 cl-6 p-b-20">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus reprehenderit cumque laboriosam totam voluptates sunt porro, aut illo nam dolores!
                                </p>

                                {{-- <a href="news-detail.html" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">
                                    Read More
                                </a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 p-b-50 isotope-item business-n">
                        <div class="bg-0 h-full">
                            <a href="{{ route('frontend.news_detail') }}" class="hov-img0 of-hidden">
                                <img src="{{ asset('images/31ss/news/Website 31ss 2-07.jpg') }}" alt="IMG">
                            </a>

                            <div class="bg-0 p-t-26">
                                <h4 class="p-b-12">
                                    <a href="{{ route('frontend.news_detail') }}" class="t1-m-1 cl-3 hov-link2 trans-02 text-custom-light-brown">
                                        Lorem Ipsum Dolor Sit Amet
                                    </a>
                                    <div class="py-2">
                                        <div class="bg-3 bg-custom-light-brown" style="width: 15%; height: 1px;"></div>
                                    </div>
                                </h4>

                                {{-- <div class="flex-wr-s-c p-b-9">
                                    <div class="p-r-20">
                                        <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                        <span class="t1-s-2 cl-7">
                                            Nov 30 , 2017
                                        </span>
                                    </div>

                                    <div class="p-l-20 bo-l-1 bcl-12">
                                        <i class="fs-14 cl-7 fa fa-user m-r-2"></i>

                                        <a href="#" class="t1-s-2 cl-11 hov-link3">
                                            Admin
                                        </a>
                                    </div>
                                </div> --}}

                                <p class="t1-s-2 cl-6 p-b-20">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quaerat maxime vitae enim at alias. Nihil, dolores. Illum, labore hic.
                                </p>

                                {{-- <a href="news-detail.html" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">
                                    Read More
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

