@extends('layouts.app')

@section('header')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Crear Empresa Redentora</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Empresas Redentoras</a>
                        </li>
                        <li class="breadcrumb-item active">Crear Empresa Redentoras</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <create-company-redentora/>

@endsection

@push('css')
    <style>
    </style>
@endpush

@push('scripts')
    <script>
    </script>
@endpush

