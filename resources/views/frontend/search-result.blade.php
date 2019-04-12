@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>31 SUDIRMAN SUITES - SEARCH RESULTS</title>
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
            <div class="row mb-5">
                <div class="col-12">
                    <span class="t1-m-1 font-custom-tiempos-medium text-black">Berikut ini ditemukan {{ $results->count() }} hasil pencarian dari keyword "{{ $keyword }}"</span>
                </div>
            </div>
            <div class="row">

                @if($results->count() === 0)
                    <div class="col-12 text-center">
                        <span class="t1-m-1 font-custom-tiempos-medium text-black">Hasil pencarian kosong..</span>
                    </div>
                @else
                    @foreach($results as $result)
                        <div class="col-sm-6 col-lg-4 p-b-50 isotope-item business-n">
                            <div class="bg-0 h-full">
                                <a href="{{ route('frontend.news_detail', ['slug' => $result->slug]) }}" class="hov-img0 of-hidden">
                                    <img src="{{ asset($result->img_path) }}" alt="IMG">
                                </a>

                                <div class="bg-0 p-t-26">
                                    <h4 class="p-b-12">
                                        <a href="{{ route('frontend.news_detail', ['slug' => $result->slug]) }}" class="t1-m-1 cl-3 hov-link2 trans-02 font-custom-tiempos-bold">
                                            {{ $result->title }}
                                        </a>
                                    </h4>

                                    <div class="flex-wr-s-c p-b-9">
                                        <div class="p-r-20">
                                            <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                            <span class="t1-s-2 cl-7">
										{{ $result->created_at_front_end_formatted }}
									</span>
                                        </div>

                                        <div class="p-l-20 bo-l-1 bcl-12">
                                            <i class="fs-14 cl-7 fa fa-user m-r-2"></i>

                                            <a href="#" class="t1-s-2 cl-11 hov-link3">
                                                {{ $result->createdBy->name }}
                                            </a>
                                        </div>
                                    </div>

                                    <p class="t1-s-2 cl-6 p-b-20">
                                        {{ $result->subtitle }}
                                    </p>

                                    <a href="{{ route('frontend.news_detail', ['slug' => $result->slug]) }}" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 cl-0 hov-btn1 trans-02 bg-custom-light-brown font-custom-tiempos-medium">
                                        READ MORE
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style>

        .img-banner-responsive{
            height: 80px;
        }

        @media (min-width: 576px) {

        }

        @media (min-width: 768px) {

            .img-banner-responsive{
                height: 300px;
            }
        }

        @media (min-width: 992px) {

        }

        @media (min-width: 1200px) {
        }
    </style>
@endsection

@section('scripts')
    <script>
    </script>
@endsection