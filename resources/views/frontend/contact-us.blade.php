@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="31 SUDIRMAN SUITES Contact Us">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="31 SUDIRMAN SUITES, Property, Office, Residence, Apartment, House">

    <title>31 SUDIRMAN SUITES - CONTACT US</title>
@endsection

@section('content')

    <!-- About -->

    <section class="mb-5 banner-margin-top">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="w-100 img-banner-responsive" style="background-image: url('{{ asset('images/31ss/contact-us/website 31ss 2-09.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center px-3">
                            <span class="t1-b-1 font-custom-libre-baskerville-bold text-white d-none d-md-block">CONTACT US</span>
                        <span class="t1-m-5 font-custom-libre-baskerville-bold text-white d-block d-md-none">CONTACT US</span>
                            <hr class="mx-auto banner-line-width" style="border-bottom: 2px solid #fff;"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <span class="t1-s-2 font-custom-avenir-medium text-custom-light-brown">
                        OUR CONTACT INFO
                    </span><br/>
                    <span class="t1-b-1 font-custom-tiempos-medium text-dark">
                        Contact Us
                    </span>
                </div>
            </div>

            {{ Form::open(['route'=>['frontend.contact_us.save'],'method' => 'post','id' => 'contact-form', 'class'=>'validate-form']) }}

            <div class="row mb-4">
                <div class="col-md-7 col-12 mb-4 mb-md-0">
                    @if(count($errors))
                        <div class="row mb-4">
                            <div class="col-12">
                                <div role="alert" class="alert alert-danger">
                                    <h4 class="font-custom-tiempos-medium">Terdapat kesalahan isi pesan</h4>
                                    <br/>
                                    @foreach($errors->all() as $error)
                                        <li><span class="font-custom-tiempos-light">{{ $error }}</span></li>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(\Illuminate\Support\Facades\Session::has('success'))
                        <div class="row mb-4">
                            <div class="col-12">
                                <div role="alert" class="alert alert-success">
                                    <span class="t1-m1-1 font-custom-tiempos-medium">{{ \Illuminate\Support\Facades\Session::get('success') }}</span>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="row mb-4">
                        <div class="col-6">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required/>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Your Email" required/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone" required/>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <textarea type="text" class="form-control" id="case" name="case" rows="10" placeholder="Case Description..."></textarea>
                        </div>
                    </div>
                    <div class="row d-block d-md-none mt-3 mt-md-0">
                        <div class="col-12">
                            <input type="submit" class="btn btn-default px-4 bg-custom-light-brown t1-s-4 text-white" style="cursor: pointer;" value="SUBMIT" />
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4 col-12">
                    <div class="card">
                        <div class="card-body" style="background-color: #3B3C4B">
                            <div class="feature-main-banner-responsive">
                                <div class="box d-flex flex-column p-3">
                                    <div class="text-custom-style text-white">
                                        <h1 class="pb-3 t1-m-1 font-custom-tiempos-medium">Site Project</h1>
                                        <p class="text-contact-size">
                                            Jl. Jend. Sudirman 31<br/>
                                            Mangkura - Ujung Pandang.<br/>
                                            Makassar 90113
                                        </p><br/>
                                        <h1 class="pb-3 t1-m-1 font-custom-tiempos-medium">Marketing Gallery</h1>
                                        <p class="text-contact-size">
                                            Ratulangi Point 4th Floor<br/>
                                            Jl. DR. Ratulangi No.2<br/>
                                            Makassar 90114
                                        </p><br/>
                                        <div class="pl-4 text-contact-size">
                                            <p>Contact Info</p>
                                            <span>info@31sudirmansuites.com</span><br/>
                                            <span>0411 - 8989 838</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5 d-none d-md-block">
                <div class="col-12">
                    <input type="submit" class="btn btn-default px-4 bg-custom-light-brown t1-s-4 text-white" style="cursor: pointer;" value="SUBMIT" />
                </div>
            </div>

            {{ Form::close() }}

        </div>
    </section>

@endsection

@section('styles')
    <style type="text/css">

        .t1-b-1{
            font-size: 20px;
            line-height: 1.2;
            letter-spacing: 1px;
        }

        hr{
            margin-top: 0.2rem;
            margin-bottom: 0.2rem;
        }
        .btn-dark{
            border-radius: 30%;
        }
        .text-contact-size{
            font-size: 15px;
        }

        #contact-form .form-control{
            background-color: #f6f7f7;
            border: 0;
            padding: 1rem;
        }

        #contact-form input::placeholder, #contact-form textarea::placeholder{
            color: #000;
            font-size: 11px;
            font-family: 'TiemposHeadlineLight', sans-serif !important;
        }

        .img-banner-responsive{
            height: 100px;
        }

        @media (max-width: 576px) {
            .centered {
                position: absolute;
                top: 80%;
                left: 50%;
                transform: translate(-50%, -50%);
                min-width: 300px;
            }
        }

        @media (min-width: 768px) {

            .centered {
                position: absolute;
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
                min-width: 300px;
            }

            .img-banner-responsive{
                height: 325px;
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

        @media (max-width: 992px) {
        }

        @media (min-width: 1024px) {

            .centered {
                position: absolute;
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
                min-width: 300px;
            }
        }

        @media (min-width: 1200px) {
            .centered {
                position: absolute;
                top: 45%;
                left: 50%;
                transform: translate(-50%, -50%);
                min-width: 300px;
            }
        }
    </style>
@endsection

@section('scripts')
    <script>
    </script>
@endsection