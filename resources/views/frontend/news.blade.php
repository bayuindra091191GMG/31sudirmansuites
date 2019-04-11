@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>31 SUDIRMAN SUITES - NEWS</title>
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
                        <span class="t1-b-1 font-custom-tiempos-medium text-white">NEWS</span>
                        <hr class="mx-auto banner-line-width" style="border-bottom: 2px solid #fff;"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="slider-youtube">
                    <div class="item youtube">
                        <div class="video-background">
                            <div class="video-foreground">
                                <iframe src="https://www.youtube.com/embed/M-hGwtvtXCk?controls=0&amp;showinfo=0&amp;loop=1&playlist=M-hGwtvtXCk&amp;enablejsapi=1&amp;iv_load_policy=3&amp;rel=0&amp;modestbranding=1" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
{{--                        <div class="slick-button">--}}
{{--                            <a href="#">SEE MORE</a>--}}
{{--                        </div>--}}
                    </div>
                    <div class="item youtube">
                        <div class="video-background">
                            <div class="video-foreground">
                                <iframe src="https://www.youtube.com/embed/V2vwFS8ae2I?controls=0&amp;showinfo=0&amp;loop=1&playlist=V2vwFS8ae2I&amp;enablejsapi=1&amp;iv_load_policy=3&amp;rel=0&amp;modestbranding=1" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
{{--                        <div class="slick-button">--}}
{{--                            <a href="#">SEE MORE</a>--}}
{{--                        </div>--}}
                    </div>
                    <div class="item youtube">
                        <div class="video-background">
                            <div class="video-foreground">
                                <iframe src="https://www.youtube.com/embed/Qo4JIT8jMtI?controls=0&amp;showinfo=0&amp;loop=1&playlist=YXBUD7-ACMM&amp;enablejsapi=1&amp;iv_load_policy=3&amp;rel=0&amp;modestbranding=1" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
{{--                        <div class="slick-button">--}}
{{--                            <a href="#">SEE MORE</a>--}}
{{--                        </div>--}}
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

        .slider-youtube iframe {
            min-width: 700px;
            height: 400px;
        }

        .slider-youtube .youtube {
        }

        .slider-youtube .youtube:not(.slick-current) {
        }

        img.slick-slide {
            max-width: 100vw;
        }

        .video-background {
            background: #000;
            z-index: -99;
            max-height: 400px;
        }

        .video-foreground,
        .video-background iframe {
            width: 100%;
            height: 400px;
            pointer-events: none;
        }

        .slick-button {
            position: relative;
            bottom: 60px;
            text-align: center;
            z-index: 9999;
        }

        .slick-button a {
            color: white;
            background-color: black;
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
    </script>
@endsection

