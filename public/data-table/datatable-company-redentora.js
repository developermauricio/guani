/**
 * DataTables Basic
 */

$(function () {
    'use strict';

    var dt_basic_table = $('.datatable-company-redentora');

    // DataTable with buttons
    // --------------------------------------------------------------------

    if (dt_basic_table.length) {
        var dt_basic = dt_basic_table.DataTable({
            ajax: '/api/company-redentora',
            columns: [
                { data: 'picture' },
                { data: 'name' },
                { data: 'nit' },
                { data: 'email' },
                { data: 'phone' },
                { data: 'address' },
                { data: 'state' },
                { data: '' },
            ],
            columnDefs: [
                {
                    orderable: false,
                    targets: 0,
                    render: function (data, type, full, meta) {
                        var $user_img = full['picture'];
                        var $output = '<img src="' + $user_img + '" alt="Avatar" width="32" height="32">';

                        // Creates full output for row
                        var $row_output = '<div class="d-flex justify-content-left align-items-center">' +
                            '<div class="avatar mr-1">' +
                            $output +
                            '</div></div>';
                        return $row_output;
                    }
                },
                {
                    targets: 1,
                    orderable: true,
                    render: function (data, type, full, meta) {
                        var $name = full['name'];
                        return('<a href="/redentoras/profile-company" class="name-datatable">' + $name + '</a>');
                    }
                },
                {
                    targets: 2,
                    visible: true
                },
                {
                    targets: 3,
                },
                {
                    targets: 4
                },
                {
                    targets: 5
                },
                {
                    targets: -2,
                    render: function (data, type, full, meta) {
                        var $status_number = full['state'];
                        var $status = {
                            1: { title: 'Activo', class: ' badge-light-success' },
                            2: { title: 'Current', class: 'badge-light-primary' },
                            3: { title: 'Inactivo', class: ' badge-light-danger' },
                            4: { title: 'Revisión', class: ' badge-light-warning' },
                            5: { title: 'Applied', class: ' badge-light-info' }
                        };
                        if (typeof $status[$status_number] === 'undefined') {
                            return data;
                        }
                        return (
                            '<span class="badge badge-pill ' +
                            $status[$status_number].class +
                            '">' +
                            $status[$status_number].title +
                            '</span>'
                        );
                    }
                },
                {   // Actions
                    targets: -1,
                    title: 'Actions',
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return (
                            '<a href="/redentoras/profile-company" class="item-edit mx-1" style="color: #FF8510;">' +
                            feather.icons['edit'].toSvg({ class: 'font-small-4' }) +
                            '</a>' +
                            '<a href="javascript:;" data-toggle="modal" data-target="#modal-deleted-company" class="delete-record">' +
                            feather.icons['trash-2'].toSvg({ class: 'font-small-4' }) +
                            '</a>'
                        );
                    }
                }
            ],
            order: [[2, 'desc']],
            dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            displayLength: 5,
            lengthMenu: [5,10, 25, 50, 75, 100],
            buttons: [
                {
                    extend: 'collection',
                    className: 'btn btn-outline-secondary dropdown-toggle mr-2',
                    text: feather.icons['share'].toSvg({ class: 'font-small-4 mr-50' }) + 'Exportar',
                    buttons: [
                        {
                            extend: 'print',
                            text: feather.icons['printer'].toSvg({ class: 'font-small-4 mr-50' }) + 'Imprimir',
                            className: 'dropdown-item',
                            exportOptions: { columns: [1, 2, 3, 4, 5, 6] } // columnas que se van a tener en cuenta.
                        },
                        {
                            extend: 'csv',
                            text: feather.icons['file-text'].toSvg({ class: 'font-small-4 mr-50' }) + 'Csv',
                            className: 'dropdown-item',
                            exportOptions: { columns: [1, 2, 3, 4, 5, 6] }
                        },
                        {
                            extend: 'excel',
                            text: feather.icons['file'].toSvg({ class: 'font-small-4 mr-50' }) + 'Excel',
                            className: 'dropdown-item',
                            exportOptions: { columns: [1, 2, 3, 4, 5, 6] }
                        },
                        {
                            extend: 'pdf',
                            text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 mr-50' }) + 'PDF',
                            className: 'dropdown-item',
                            exportOptions: { columns: [1, 2, 3, 4, 5, 6] }
                        },
                        {
                            extend: 'copy',
                            text: feather.icons['copy'].toSvg({ class: 'font-small-4 mr-50' }) + 'Copiar',
                            className: 'dropdown-item',
                            exportOptions: { columns: [1, 2, 3, 4, 5, 6] }
                        }
                    ],
                    init: function (api, node, config) {
                        $(node).removeClass('btn-secondary');
                        $(node).parent().removeClass('btn-group');
                        setTimeout(function () {
                            $(node).closest('.dt-buttons').removeClass('btn-group').addClass('d-inline-flex');
                        }, 50);
                    }
                },
                {
                    text: feather.icons['plus'].toSvg({ class: 'mr-50 font-small-4' }) + 'Crear Empresa',
                    className: 'new-company-redentora btn btn-primary',
                    init: function (api, node, config) {
                        $(node).removeClass('btn-secondary');
                    }
                }
            ],
            language: { // idioma por defecto Spanish
                url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json',
                paginate: { // remove previous & next text from pagination
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            }
        });
        $('div.head-label').html('<h6 class="mb-0">Empresas redentoras</h6>');
    }

    // Delete Record
    /* $('.datatable-company-redentora tbody').on('click', '.delete-record', function () {
        console.log('Hola bebbe...');
        dt_basic.row($(this).parents('tr')).remove().draw();
    }); */

});



