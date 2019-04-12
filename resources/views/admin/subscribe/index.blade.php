@extends('layouts.admin')

@section('content')

    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4> <i class="fa fa-table"></i> Daftar Subscriber</h4>
                </div>
            </div>
        </div>
    </header>

    <div class="content-wrapper animatedParent animateOnce">
        <div class="container">
            <section class="paper-card">
                <div class="row">
                    <div class="col-lg-12">
                        @include('partials.admin._messages')
                        <table id="subscriber_table" class="table table-striped table-bordered dt-responsive">
                            <thead>
                            <tr>
                                <th>Email</th>
                                <th>Tanggal</th>
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

    <!-- Delete Blog Modal -->
    <div class="modal" id="modal_delete">
        <div class="modal-dialog">
            <div class="modal-content">

                {{ Form::open(['route'=>['admin.subscribes.destroy'],'method' => 'post','id' => 'general-form', 'novalidate']) }}

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Konfirmasi Hapus</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus Subscriber ini?
                    <input type="hidden" id="deleted_subscribe_id" name="deleted_subscribe_id"/>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                    <input type="submit" class="btn btn-success" value="Ya" />
                </div>

                {{ Form::close() }}
            </div>
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
        $('#subscriber_table').DataTable({
            processing: true,
            serverSide: true,
            pageLength: 25,
            ajax: '{!! route('datatables.subscribe') !!}',
            order: [ [0, 'asc'] ],
            columns: [
                { data: 'email', name: 'email', class: 'text-center'},
                { data: 'created_at', name: 'created_at', class: 'text-center', orderable: false, searchable: false,
                    render: function ( data, type, row ){
                        if ( type === 'display' || type === 'filter' ){
                            return moment(data).format('DD MMM YYYY');
                        }
                        return data;
                    }
                },
                { data: 'action', name: 'action', class: 'text-center', orderable: false, searchable: false }
            ],
        });

        $('.delete-modal').on('click', function () {
            $('#deleted_subscribe_id').val($(this).data('id'));
            $('#modal_delete').modal('show');

        });
    </script>
@endsection