@extends('layouts.app')

@section('header')
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Configurar Perfil</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Inicio</a>
                        </li>
                        <li class="breadcrumb-item active">Perfil
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
    </div>
@endsection
@section('content')

    <section id="page-account-settings">
                <profile-admin></profile-admin>
    </section>

@endsection
@push('js')
    <script>
    </script>
@endpush

