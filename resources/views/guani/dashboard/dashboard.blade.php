@extends('layouts.app')

@section('header')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Dashboard</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Panel Informativo</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrumb-right">
            @if($currentWebsite)
                <img class="float-right" src="{{ $currentWebsite->logo }}" alt="" style="width: 25%">
            @endif
        </div>
    </div>
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Bienvenido al dashboard</h1>
        </div>
    </div>

@endsection
@push('js')
    <script>
    </script>
@endpush
