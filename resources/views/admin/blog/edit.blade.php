@extends('layouts.admin')

@section('title')
    <title>BACKEND - Ubah Artikel</title>
@endsection

@section('content')
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4> <i class="fa fa-table"></i> Ubah Artikel {{ $blog->title }}</h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid my-3">
        <div class="row mb-3">
            <div class="col-12 text-right">
                <a href="{{ route('admin.blog.index') }}" class="btn btn-danger">BATAL</a>
                <a class="btn btn-success" onclick="submitBlog()" style="cursor: pointer;">SIMPAN</a>
            </div>
        </div>

        {{ Form::open(['route'=>['admin.blog.update', $blog->id],'method' => 'post','id' => 'general-form','class' => 'form-material', 'enctype' => 'multipart/form-data', 'novalidate']) }}

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
                                            <input type="text" id="title" name="title" class="form-control" placeholder="Judul Artikel" value="{{ $blog->title }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label class="form-control">Upload Gambar Utama</label>
                                            <label class="text-red font-weight-bold">Rekomendasi dimensi ukuran 3:2, maksimal size gambar 4 MB</label>
                                            <input type="file" class="form-control" id="featured-image" name="featured-image"/>
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
                                <label for="content" class="form-control">Konten Berita</label>
                                <textarea class="form-control" id="content" name="content">{!! $blog->description !!}</textarea>
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
    <link href="{{ asset('bootstrap-fileinput/css/fileinput.min.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{ asset('summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('bootstrap-fileinput/js/fileinput.min.js') }}"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                'height'    : 400,
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });

            $("#featured-image").fileinput({
                initialPreview: '{{ asset($blog->img_path) }}',
                initialPreviewAsData: true,
                allowedFileExtensions: ["jpg", "jpeg", "png"],
                maxFileSize: 4096,
                showUpload: false,
            });
        });

        function submitBlog(){
            $('#general-form').submit();
        }
    </script>
@endsection