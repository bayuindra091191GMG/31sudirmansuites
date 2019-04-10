@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>31 SUDIRMAN SUITES - NEWS DETAIL</title>
@endsection

@section('content')

<section class="bg-0 flex-wr-s-st m-b-15-sr991">
    <div class="col-md-12 size-a-18 respon-3 header-img" style="background-image: url('{{ asset('images/31ss/news/Website 31ss 2-04.jpg') }}');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        height: 400px;">
    </div>
</section>

<section>
    <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <span style="color:grey; font-size:12px;">Date, January 5th 2019</span><br/>
                    <span class="text-custom-light-brown t1-m-1" style="font-size: 25px;">Lorem Ipsum Dolor,consectetuer adipiscing elit.</span><br/>
                    <span class=" font-weight-bold" style="font-size:14px;">quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</span>
                </div>        
                <div class="col-md-3">
                    <h2></h2><br/>
                    <span style="font-size:25px">News</span>
                    <div class="size-a-1 bg-3" style="width: 50%; height: 1px;"></div>
                    <span>2019  ></span><br/>
                    <span>2018  v</span><br/>
                    <div class="col-md-1"></div>
                    <div class="col" style="font-size:12px; color:grey">
                        <span>Lorem ipsum dolor sit</span><br/>
                        <span>Consectetuer Adipiscing</span>
                    </div>
                </div>
            </div>
    </div>
</section>
<section class="m-t--50 m-b-50">
    <div class="container">
        <div class="row">
            <div class="col-md-3 m-t--40">
                <div class="mt-5 pb-3" style="background-image: url('{{ asset('images/31ss/news/Website-31ss-2-08.jpg') }}');
                    background-repeat: no-repeat;
                    background-position: left;
                    background-size: contain;
                    height: 300px;">
                </div>
            </div>
            <div class="col-md-4" style="font-size:12px;">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        diam nonummy nibh euismod tincidunt ut laoreet dolore
                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                        quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                        aliquip ex ea commodo consequat. Duis autem vel eum iriure
                        dolor in hendrerit in vulputate velit esse molestie consequat,
                        vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                        et iusto odio dignissim qui blandit praesent luptatum
                        zzril delenit augue duis dolore te feugait nulla facilisi.
                        Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed
                        diam nonummy nibh euismod tincidunt ut laoreet dolore
                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                        quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                        aliquip ex ea commodo consequat.
                </p><br/>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        diam nonummy nibh euismod tincidunt ut laoreet dolore
                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                        quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                        aliquip ex ea commodo consequat. Duis autem vel eum iriure
                        dolor in hendrerit in vulputate velit esse molestie consequat,
                        vel illum dolore eu feugiat nulla facilisis at vero eros et ac-
                </p>
            </div>
        </div>
    </div>
</section>
<section class="mb-5">
<div class="container">
    <div class="row">
            <div class="size-a-1 bg-3 bg-custom-light-brown" style="width: 100%; height: 1px;"></div>
    </div>
</div>
</section>
<section class="bg-0 p-b-50 px-5">
        <div class="container">
            <div class="row isotope-grid">
                <div class="col-md-3 p-b-50">
                    <div>
                        <span class="font-weight-bold" style="font-size: 20px;">Further Reading</span>
                    </div>
                </div>
            </div>
            <div class="row isotope-grid">
                <div class="col-sm-6 col-lg-4 p-b-50 col-md-3 isotope-item business-n">
                    <div class="bg-0 h-full">
                        <a href="{{ route('frontend.news_detail') }}" class="hov-img0 of-hidden ">
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

                            <p class="t1-s-2 cl-6 p-b-20" style="font-size: 12px;">
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

                            <p class="t1-s-2 cl-6 p-b-20" style="font-size: 12px;">
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

                            <p class="t1-s-2 cl-6 p-b-20" style="font-size: 12px;">
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
    </section>
@endsection