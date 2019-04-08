@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Contact Us">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>31 SUDIRMAN SUITES - CONTACT US</title>
@endsection

@section('content')

    <!-- About -->
    <section class="bg-0 flex-wr-s-st m-b-15-sr991">
        <div class="col-md-12 size-a-18 respon-3 header-img" style="background-image: url('{{ asset('images/31ss/contact-us/Website 31ss 2-09.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            height: 400px;">
            </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-4 py-5"  >
                    <div>
                        <h3 class="text-custom-light-brown" style="font-size: 15px !important;">
                            OUR CONTACT INFO
                        </h3>
                        <h1 style="font-size: 30px;">
                            Contact Us
                        </h1>
                    </div>
                </div>
                <div class="col-4"></div>
                <div class="col-4 p-b-60">
                    @if(\Illuminate\Support\Facades\Session::has('success'))
                        <div class="row mb-2">
                            <div class="col-lg-12 col-md-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ \Illuminate\Support\Facades\Session::get('success') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                    {{ Form::open(['route'=>['frontend.contact_us.save'],'method' => 'post','id' => 'contact-form', 'class'=>'validate-form']) }}

                        <div class="m-b-15 validate-input" data-validate = "Name is required">
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-15 bo-1-rad-4 bcl-12 focus-in1" type="text" name="name" placeholder="Your Name">
                        </div>

                        <div class="m-b-15 validate-input" data-validate = "Valid email is: ex@abc.xyz">
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-15 bo-1-rad-4 bcl-12 focus-in1" type="text" name="email" placeholder="Your Email">
                        </div>

                        <div class="m-b-15 validate-input" data-validate = "Phone is required">
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-15 bo-1-rad-4 bcl-12 focus-in1" type="text" name="phone" placeholder="Phone">
                        </div>

                        <div class="m-b-15 validate-input" data-validate = "Address is required">
                                <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-15 bo-1-rad-4 bcl-12 focus-in1" type="text" name="address" placeholder="Address">
                            </div>

                        <div class="m-b-30 validate-input" data-validate = "Message is required">
                            <textarea class="size-a-14 t1-m-2 plh-6 cl-6 p-rl-15 p-tb-13 bo-1-rad-4 bcl-12 focus-in1" name="msg" placeholder="Case Description.."></textarea>
                        </div>

                        <button class="btn bg-custom-light-brown text-white">
                            Submit
                        </button>
                    {{ Form::close() }}
                </div>
                <div class="col-4 m-l-250">
                        <div class="card">
                            <div class="card-body" style="background-color: #3B3C4B">
                                <div class="feature-main-banner-responsive">
                                    <div class="box d-flex flex-column">
                                        <div class="text-custom-style text-white">
                                            <h1 class="pb-3 font-weight-bold">Contact Info</h1>
                                            <p class="text-contact-size">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><br/>
                                            <div class="pl-4 text-contact-size">
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis, eveniet!</p><br/>
                                                <span>12345 6789</span><br/>
                                                <span>12345 6789</span><br/><br/>
                                                <span>qwelk!@info.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

@endsection

@section('styles')
    <style type="text/css">
        .btn-dark{
            border-radius: 30%;
        }
        .text-contact-size{
            font-size: 15px;
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