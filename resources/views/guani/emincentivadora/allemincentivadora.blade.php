@extends('layouts.app')

@push('css')

@endpush

@section('header')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12 red">
                <h2 class="content-header-title float-left mb-0">Empresas Incentivadoras</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Empresas Incentivadoras</a>
                        </li>
                        <li class="breadcrumb-item active">Todas las empresas
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
        {{--                                                                  href="guani-todo.html"><i class="mr-1"--}}
        {{--                                                                                          data-feather="check-square"></i><span--}}
        {{--                            class="align-middle">Todo</span></a><a class="dropdown-item"--}}
        {{--                                                                   href="guani-chat.html"><i class="mr-1"--}}
        {{--                                                                                           data-feather="message-square"></i><span--}}
        {{--                            class="align-middle">Chat</span></a><a class="dropdown-item"--}}
        {{--                                                                   href="guani-email.html"><i class="mr-1"--}}
        {{--                                                                                            data-feather="mail"></i><span--}}
        {{--                            class="align-middle">Email</span></a><a class="dropdown-item"--}}
        {{--                                                                    href="guani-calendar.html"><i class="mr-1"--}}
        {{--                                                                                                data-feather="calendar"></i><span--}}
        {{--                            class="align-middle">Calendar</span></a></div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <all-companies-incentivadora></all-companies-incentivadora>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="/data-table/datatable-company-redentora.js"></script>
    {{-- <script>
        console.log('hola bb');
        $('button').on( "click", ".new-company-redentora", function() { console.log('hola.....') });
    </script> --}}
@endpush

