@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1 class="text-center">Gestión de Usuarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <button class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#newUserModal"><i class="fa-plus-circle fas "></i><span class="mx-1">Nuevo</span></button>
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
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn bg-navy">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
