@extends('layouts.admin')

@section('title')
    <title>BACKEND - Ganti Password</title>
@endsection

@section('content')
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4> <i class="fa fa-table"></i> Ganti Password</h4>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid my-3">
        <div class="row mb-3">
            <div class="col-12 text-right">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-danger">BATAL</a>
                <a class="btn btn-success" onclick="submitForm()" style="cursor: pointer;">GANTI PASSWORD</a>
            </div>
        </div>

        {{ Form::open(['route'=>['admin.change-password.save'],'method' => 'post','id' => 'general-form','class' => 'form-material', 'novalidate']) }}

        @if(count($errors))
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body b-b">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-12">
                                        <div role="alert" class="alert alert-danger">
                                            <h4>Terdapat Kesalahan Input</h4>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if(\Illuminate\Support\Facades\Session::has('message'))
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body b-b">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-12">
                                        <div role="alert" class="alert alert-success">
                                            {{ \Illuminate\Support\Facades\Session::get('message') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="row mb-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body b-b">

                        <!-- Input -->
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-3"></div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" id="password_current" name="password_current" class="form-control" placeholder="Password Sekarang" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" id="password_new" name="password_new" class="form-control" placeholder="Password Baru"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                        <!-- #END# Input -->

                    </div>
                </div>
            </div>
        </div>

        {{ Form::close() }}

    </div>
@endsection

@section('styles')
@endsection

@section('scripts')
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>

        function submitForm(){
            $('#general-form').submit();
        }
    </script>
@endsection