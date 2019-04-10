@extends('layouts.admin')

@section('title')
    <title>BACKEND - Daftar Artikel</title>
@endsection

@section('content')

    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4> <i class="fa fa-table"></i> Daftar Artikel </h4>
                </div>
            </div>
        </div>
    </header>

    <div class="content-wrapper animatedParent animateOnce">
        <div class="container">
            <section class="paper-card">
                @if(\Illuminate\Support\Facades\Session::has('message'))
                <div class="row mb-3">
                    <div class="col-12">
                        <div role="alert" class="alert alert-success">
                            {{ \Illuminate\Support\Facades\Session::get('message') }}
                        </div>
                    </div>
                </div>
                @endif
                <div class="row mb-3">
                    <div class="col-12 text-right">
                        <a href="{{ route('admin.blog.create') }}" class="btn btn-success">
                            <i class="fa fa-plus"></i>&nbsp;Buat Artikel Baru
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        @include('partials.admin._messages')
                        <table id="news-table" class="table table-striped table-bordered dt-responsive">
                            <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Kategori</th>
                                <th>Terbaca</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('styles')
    <link href="{{ asset('css/datatables.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{ asset('js/datatables.js') }}"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $('#news-table').DataTable({
            processing: true,
            serverSide: true,
            pageLength: 25,
            ajax: '{!! route('datatables.blog') !!}',
            order: [ [0, 'asc'] ],
            columns: [
                { data: 'created_at', name: 'created_at', class: 'text-center', orderable: false, searchable: false,
                    render: function ( data, type, row ){
                        if ( type === 'display' || type === 'filter' ){
                            return moment(data).format('DD MMM YYYY');
                        }
                        return data;
                    }
                },
                { data: 'title', name: 'title', class: 'text-center'},
                { data: 'category', name: 'category.name', class: 'text-center'},
                { data: 'read_count', name: 'read_count', class: 'text-center'},
                { data: 'status', name: 'status.description', class: 'text-center'},
                { data: 'action', name: 'action', orderable: false, searchable: false, class: 'text-center'}
            ],
        });
    </script>
@endsection