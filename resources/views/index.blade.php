@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Ausentismo - Empresa SST</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 px-5 px-sm-0">
                <div class="col mb-4 mb-md-0">
                    <div class="card h-100 bg-primary position-relative">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold text-center w-100">Empleados</h5>
                        </div>
                        <div class="card-body p-2">
                            <p class="fa-4x font-weight-light m-0 text-center">500</p>
                        </div>
                        <i class="fas fa-info-circle position-absolute m-1 class_title"></i>
                    </div>
                </div>
                <div class="col mb-4 mb-md-0">
                    <div class="card h-100 bg-success position-relative">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold text-center w-100">Ausentismo</h5>
                        </div>
                        <div class="card-body p-2">
                            <p class="fa-4x font-weight-light m-0 text-center">7</p>
                        </div>
                        <i class="fas fa-info-circle position-absolute m-1 class_title"></i>
                        <select class="border-0 form-control form-control-sm h-auto m-1 p-0 position-absolute text-success w-auto card-select-dashboard">
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="all">Total</option>
                        </select>
                    </div>
                </div>
                <div class="col mb-4 mb-sm-0">
                    <div class="card h-100 bg-warning position-relative">
                        <div class="card-header text-white">
                            <h5 class="card-title font-weight-bold text-center w-100">Dx común</h5>
                        </div>
                        <div class="card-body p-2 text-white">
                            <p class="fa-4x font-weight-light m-0 text-center">U072</p>
                        </div>
                        <i class="fas fa-info-circle position-absolute m-1 text-white class_title" data-title="COVID-19 (VIRUS NO IDENTIFICADOS)"></i>
                        <select class="border-0 form-control form-control-sm h-auto m-1 p-0 position-absolute text-warning w-auto card-select-dashboard">
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="all">Total</option>
                        </select>
                    </div>
                </div>
                <div class="col mb-md-0">
                    <div class="card h-100 bg-danger position-relative">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold text-center w-100">Pagado($)</h5>
                        </div>
                        <div class="card-body p-2">
                            <p class="fa-4x font-weight-light m-0 text-center">90 M</p>
                        </div>
                        <i class="fas fa-info-circle position-absolute m-1 class_title" data-title="K - Miles / M - Millones"></i>
                        <select class="border-0 form-control form-control-sm h-auto m-1 p-0 position-absolute text-danger w-auto card-select-dashboard">
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="all">Total</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body"></div>
    </div>
@stop

@section('css')
    <style>
        .class_title {
            cursor: pointer;
            right: 0;
            bottom: 0;
        }

        .class_title::after {
            display: none;
            content: attr(data-title);
            color: black;
            font-family: system-ui;
            font-size: 0.7rem;
            padding: 5px 8px;
            background: rgb(248 248 248 / 44%);
            border-radius: 5px;
            position: absolute;
            bottom: 20px;
            right: 0;
            z-index: 1;
            font-weight: normal;
            white-space: nowrap;
        }

        .class_title:hover::after {
            display: block;
        }

        .card-select-dashboard {
            bottom: 0;
            left: 0;
        }

        ::-webkit-scrollbar {
            width: 8px;
            background-color: rgba(13, 41, 63, 0.88);
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: rgba(56, 56, 56, 0.52);
        }
    </style>

@stop

@section('js')
@stop
