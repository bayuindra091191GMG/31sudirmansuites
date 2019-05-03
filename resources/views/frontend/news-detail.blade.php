@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="31 SUDIRMAN SUITES News Detail">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="31 SUDIRMAN SUITES, Property, Office, Residence, Apartment, House">

    <title>31 SUDIRMAN SUITES - NEWS DETAIL</title>
@endsection

@section('content')

    <section class="mb-5 banner-margin-top">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="w-100 img-banner-responsive" style="background-image: url('{{ asset('images/31ss/news/website 31ss 2-04.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center px-3">
                            <span class="t1-b-1 font-custom-libre-baskerville-bold text-white">NEWS</span>
                            <hr class="mx-auto banner-line-width" style="border-bottom: 2px solid #fff;"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-12">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="mb-3">
                            <span class="font-custom-tiempos-light" style="color:grey; font-size:12px;">Date, {{ $article->created_at_front_end_formatted }}</span><br/>
                        </div>
                        <div class="mb-3">
                            <span class="t1-m-1 font-custom-tiempos-medium text-custom-light-brown">{{ $article->title }}</span><br/>
                            <span class="t1-m-2 font-custom-tiempos-medium text-dark">{{ $article->subtitle ?? "" }}</span>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4 col-12 mb-4 mb-md-0 text-center text-md-left">
                        <img src="{{ asset($article->img_path) }}" style="height: 150px;"/>
                    </div>
                    <div class="col-md-6 col-12">
                        {!! $article->description !!}
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="col-md-3 col-12 pt-4">
                <div class="row">
                    <div class="col-12">
                        <span class="t1-m-4 font-custom-tiempos-medium text-custom-black">News</span>
                        <div class="size-a-1 bg-3" style="width: 50%; height: 1px;"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul id="treeview">
                            @foreach( $years as $year => $groupedNews)
                                <li>{{ $year }}
                                    <ul>
                                        @foreach($groupedNews as $groupedNew)
                                            <li><a href="{{ route('frontend.news_detail', ['slug' => $groupedNew->slug]) }}">{{ $groupedNew->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

{{--                <span>2019  ></span><br/>--}}
{{--                <span>2018  v</span><br/>--}}
{{--                <div class="col-md-1"></div>--}}
{{--                <div class="col" style="font-size:12px; color:grey">--}}
{{--                    <span>Lorem ipsum dolor sit</span><br/>--}}
{{--                    <span>Consectetuer Adipiscing</span>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <hr class="w-100" style="border-bottom: 1px solid #c38b63;"/>
        </div>
    </div>
</section>

<section class="mb-5">
        <div class="container">
            <div class="row isotope-grid mb-4">
                <div class="col-md-3">
                    <div>
                        <span class="font-weight-bold" style="font-size: 20px;">Further Reading</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <section class="mb-5">
                    <div class="container">
                        <div class="row">
                            @foreach($news as $new)
                                <div class="col-sm-6 col-lg-4 p-b-50">
                                    <div class="bg-0 h-full">
                                        <a href="{{ route('frontend.news_detail', ['slug' => $new->slug]) }}" class="hov-img0 of-hidden">
                                            <img src="{{ asset($new->img_path) }}" alt="IMG">
                                        </a>

                                        <div class="bg-0 p-t-26">
                                            <h4 class="p-b-12">
                                                <a href="{{ route('frontend.news_detail', ['slug' => $new->slug]) }}" class="t1-m-1 cl-3 hov-link2 trans-02 text-custom-light-brown">
                                                    {{ $new->title }}
                                                </a>
                                                <div class="py-2">
                                                    <div class="bg-3 bg-custom-light-brown" style="width: 15%; height: 1px;"></div>
                                                </div>
                                            </h4>

                                            <p class="t1-s-2 cl-6 p-b-20">
                                                {{ $new->subtitle }}
                                            </p>

                                            {{-- <a href="news-detail.html" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">
                                                Read More
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
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
                height: 300px;
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
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script>
        jQuery(function ($) {
            $("#treeview").shieldTreeView();
        });
    </script>
@endsection