@extends('layouts.admin')

@section('title')
    <title>BACKEND - Buat News Baru</title>
@endsection

@section('content')
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-12 text-center">
                <h1>Buat News Baru</h1>
            </div>
            <div class="col-md-3 text-right">
                <a class="btn btn-danger">BATAL</a>
                <a class="btn btn-success">PUBLISH</a>
            </div>
        </div>
        {{ Form::open(['route'=>['admin.blog.store'],'method' => 'post','id' => 'general-form','class' => 'form-material', 'enctype' => 'multipart/form-data', 'novalidate']) }}
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
                                                <input type="text" id="title" name="title" class="form-control" placeholder="Judul Artikel" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Link Gambar" />
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
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body b-b">
                            <!-- Input -->
                            <div class="body">
                                <div class="form-group">
                                    <label for="content">Konten Berita</label>
                                    <textarea class="form-control" id="content" name="content"></textarea>
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
    <link href="{{ asset('summernote/summernote-bs4.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{ asset('summernote/summernote-bs4.min.js') }}"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                'height'    : 300
            });
        });
    </script>
@endsection