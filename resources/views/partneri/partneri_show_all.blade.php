@extends('adminlte.layout.app')

@section('custom-styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css"/>
@endsection

@section('content')
    <style>
        .custom-select {
            width: 4em !important;
        }
    </style>
    <div class="content-wrapper" style="min-height: 2080.12px;">
        <section class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1>Pregled poslovnih partnera</h1>
                    </div>
                    <div>
                        <button class="btn btn-primary"><a class="text-dark"
                                                           href="https://www.apr.gov.rs/%d0%bf%d0%be%d1%87%d0%b5%d1%82%d0%bd%d0%b0.3.html">Otvori
                                APR</a>
                        </button>
                        <button class="btn btn-secondary"><a class="text-dark"
                                                             href="https://www.apr.gov.rs/%d0%bf%d0%be%d1%87%d0%b5%d1%82%d0%bd%d0%b0.3.html">Otvori
                                NBS</a>
                        </button>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content ">
            <div class="container">
                <table id="table_id" class="display" style="width:100%"></table>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection


@section('custom-scripts')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {

            var table = $('#table_id').DataTable({
                data: {!! $partners !!},
                scrollX: true,
                decimal: ",",
                language: {
                    search: "Pretraga&nbsp;:",
                    info: "_START_ - _END_ od ukupno _TOTAL_ partnera",
                    lengthMenu: "Prikaži _MENU_ partnera",
                    infoFiltered: "(Filtrirano od _MAX_ ukupno partnera)",
                    paginate: {
                        first: "Prvi",
                        previous: "Prošla lista",
                        next: "Sledeća lista",
                        last: "Poslednji"
                    },
                },
                // initComplete: function () {
                //     this.api()
                //         .columns()
                //         .every(function () {
                //             var column = this;
                //             var title = column.header().textContent;
                //
                //             // Create input element and add event listener
                //             $('<input type="text"/>')
                //                 .appendTo($(column.header()))
                //                 .on('keyup change clear', function () {
                //                     if (column.search() !== this.value) {
                //                         column.search(this.value).draw();
                //                     }
                //                 });
                //         });
                // },
                columns: [
                    {
                        title: 'Interna sifra'
                    },
                    {
                        title: 'Naziv'
                    },
                    {title: 'Skraćeni naziv'},
                    {title: 'Pib'},
                    {
                        title: 'Aktivan',
                        render: function (data, type) {
                            return data ? '<i class="fas fa-circle fa-xl" style="color: #ff0000; font-size: 2em; margin-left: 13%;"><i class="d-none">' + data + '</i></i>' :
                                '<i class="fa fa-circle" style="color: #198754; font-size: 2em; margin-left: 13%;"><i class="d-none">' + data + '</i></i>';
                        }
                    },
                    {
                        title: 'Email',
                        render: function (data, type) {
                            return '<i class="fa fa-envelope" aria-hidden="true"><a class="text-secondary" href = "mailto: ' + data + '">&nbsp;' + data + ' </a></i>'
                        }
                    },
                    {
                        title: 'Website',
                        render: function (data, type) {
                            return '<a href="' + data + '">' + data + '</a>'
                        }
                    },
                    {
                        title: 'Action',
                        render: function (data, type) {
                            return '<div class="row"><div class="col-sm-6"><button type="button" data-id="' + data + '" class="btn btn-outline-light"><i class="fa fa-trash remove"  style="font-size: 1em; color: #ff0000;"  aria-hidden="true"></i></button></div>' +
                                '<div class="col-sm-6"><button data-id="' + data + '" type="button" class="btn btn-outline-light"><i class="fas fa-edit edit" " style="font-size: 1em; color: #007BFF;"  aria-hidden="true"></i></button></div></div>'
                        }
                    }
                ],
            });
        });

    </script>
@endsection
