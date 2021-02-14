@extends('layouts.app')

@section('header')
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Crear Empresa Incentivadora</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Empresas Incentivadoras</a>
                        </li>
                        <li class="breadcrumb-item active">Crear Empresa Incentivadoras
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        {{--        <div class="form-group breadcrumb-right">--}}
        {{--            <div class="dropdown">--}}
        {{--                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"--}}
        {{--                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i--}}
        {{--                        data-feather="grid"></i></button>--}}
        {{--                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"--}}
        {{--                                                                  href="app-todo.html"><i class="mr-1"--}}
        {{--                                                                                          data-feather="check-square"></i><span--}}
        {{--                            class="align-middle">Todo</span></a><a class="dropdown-item"--}}
        {{--                                                                   href="app-chat.html"><i class="mr-1"--}}
        {{--                                                                                           data-feather="message-square"></i><span--}}
        {{--                            class="align-middle">Chat</span></a><a class="dropdown-item"--}}
        {{--                                                                   href="app-email.html"><i class="mr-1"--}}
        {{--                                                                                            data-feather="mail"></i><span--}}
        {{--                            class="align-middle">Email</span></a><a class="dropdown-item"--}}
        {{--                                                                    href="app-calendar.html"><i class="mr-1"--}}
        {{--                                                                                                data-feather="calendar"></i><span--}}
        {{--                            class="align-middle">Calendar</span></a></div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <form action="{{route("admin.store.company.incentivadora")}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Dominio</label>
                                        <input type="text" class="form-control" id="fqdn" name="fqdn"
                                               placeholder="Ingrese un dominio valido">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Nombre del Representante</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="Ingrese un nombre valido">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                               placeholder="Ingrese un email valido">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Logo</label>
                                        <input type="text" class="form-control" id="logo" name="logo"
                                               placeholder="Ingrese un logo valido">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary waves-effect waves-float waves-light float-right"
                                    type="submit">Crear Empresa Incentivadora
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script>
    </script>
@endpush

