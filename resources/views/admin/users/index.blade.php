@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1 class="text-center">Gestión de Usuarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{-- Creating new user btn --}}
            <div class="clearfix pb-2">
                <button class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#userModal" aria-label="Crear"><i class="fa-plus-circle fas "></i><span class="mx-1">Nuevo</span></button>
            </div>

            {{-- New User Modal --}}
            <div class="modal fade" id="userModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="userModalLabel">Usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body body-edit">
                            {!! Form::open(['route' => 'admin.users.store']) !!}
                                @include('admin.users.partials.user-data')
                            {!! Form::close() !!}
                        </div>
                        <div class="modal-body body-create">
                            {!! Form::open(['route' => 'admin.users.store']) !!}
                                @include('admin.users.partials.user-data')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

            {{-- Users table --}}
            <table class="table table-bordered table-hover table-sm table-striped" id="userTable">
                <thead class="bg-navy text-center">
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo electrónico</th>
                    <th>Acciones</th>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('css')
    <style>
        #userTable tbody td{
            vertical-align: center;
        }

        #userTable tbody tr td:last-child, #userTable tbody tr td:first-child {
            text-align: center;
        }
    </style>
@stop

@section('js')
    <script>
        $('#userTable').DataTable({
            'responsive': true,
            'autoWidth': false,
            'serverSide': true,
            'ajax': "{{ route('getUsers.datatable') }}",
            'columns': [
                {data: 'id'},
                {data: 'name'},
                {data: 'email'},
                {data: 'actions'}
            ],
            'columnDefs': [
                {
                    'sortable': false,
                    'targets': [3]
                },
            ],
            'language': {
                sProcessing: "Procesando...",
                sLengthMenu: "Mostrar _MENU_ registros",
                sZeroRecords: "No se encontraron resultados",
                sEmptyTable: "Ningún dato disponible en esta tabla",
                sInfo: "Mostrando del _START_ al _END_ de _TOTAL_ registros",
                sInfoEmpty: "No hay registros para mostrar",
                sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
                sInfoPostFix: "",
                sSearch: "Buscar:",
                sUrl: "",
                sInfoThousands: ",",
                sLoadingRecords: "Cargando...",
                oPaginate: {
                    sFirst: "Primero",
                    sLast: "Último",
                    sNext: "<i class='fas fa-chevron-right fw-bold text-primary'></i>",
                    sPrevious: "<i class='fas fa-chevron-left fw-bold text-primary'></i>",
                },
                oAria: {
                    sSortAscending: ": Activar para ordenar la columna de manera ascendente",
                    sSortDescending: ": Activar para ordenar la columna de manera descendente",
                },
                buttons: {
                    copy: "Copiar",
                    colvis: "Visibilidad",
                    pageLength: {
                        _: "%d filas",
                        "-1": "Todo",
                    },
                },
                select: {
                    rows: {
                        _: "%d filas seleccionadas",
                        0: "Click sobre una fila para seleccionarla",
                        1: "1 fila seleccionada",
                    },
                },
            }
        });

        $('#userModal').on('show.bs.modal', function (e) {
            e.currentTarget.querySelector('form').reset();
            let action = e.relatedTarget.ariaLabel;
            e.currentTarget.querySelector('#userModalLabel').textContent = '';
            e.currentTarget.querySelector('#userModalLabel').textContent = `${action} Usuario`;
            if (action === 'Editar') {
                e.currentTarget.querySelector('#name').value = e.relatedTarget.parentNode.parentNode.children[1].textContent;
                e.currentTarget.querySelector('#email').value = e.relatedTarget.parentNode.parentNode.children[2].textContent;
                e.currentTarget.querySelector('.body-create').classList.add('d-none');
                e.currentTarget.querySelector('.body-edit').classList.remove('d-none');
            } else {
                e.currentTarget.querySelector('.body-edit').classList.add('d-none');
                e.currentTarget.querySelector('.body-create').classList.remove('d-none');
            }
        });

        /*$('#userModal').on('hidden.bs.modal', function (e) {
            e.currentTarget.querySelector('form').reset();
        });*/
    </script>
@stop
