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
                <button class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#newUserModal"><i
                        class="fa-plus-circle fas "></i><span class="mx-1">Nuevo</span></button>
            </div>

            {{-- New User Modal --}}
            <div class="modal fade" id="newUserModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="newUserModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newUserModalLabel">Crear usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn bg-navy">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Users table --}}
            <table class="table table-bordered table-hover table-sm table-striped" id="userTable">
                <thead class="text-center">
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
        #userTable tbody tr:last-child{
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
            'ajax': "{{ route('getU.datatable') }}",
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
    </script>
@stop
