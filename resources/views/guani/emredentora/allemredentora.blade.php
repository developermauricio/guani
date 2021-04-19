@extends('layouts.app')

@section('header')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Empresas Redentora</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Empresas Redentora</a>
                        </li>
                        <li class="breadcrumb-item active">Todas las empresas
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <!-- Basic table -->
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <table class="datatable-company-redentora table table-responsive">
                        <thead>
                            <tr>
                                <th>logo</th>
                                <th>Nombre</th>
                                <th>Nit</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Dirección</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal-deleted-company" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Vertically Centered</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Croissant jelly-o halvah chocolate sesame snaps. Brownie caramels candy canes chocolate cake
                            marshmallow icing lollipop I love. Gummies macaroon donut caramels biscuit topping danish.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Basic table -->

@endsection

@push('css')
    <style>
        a.name-datatable {
            color: #6e6b7b;
        }
        a.name-datatable:hover {
            color: #F15F7E;
        }
        div.dt-button-collection {
            position: absolute;
            z-index: 2001;
        }
    </style>
@endpush

@push('scripts')
    <script src="/data-table/datatable-company-redentora.js"></script>
    <script>
        setTimeout( function() {
            $("div.head-label").html('<h6 class="mb-0">Empresas redentoras</h6>');
            $("button.new-company-redentora").on( "click", () => { window.location.replace("/redentoras/create-company") } );
        }, 2000 );
    </script>
@endpush

