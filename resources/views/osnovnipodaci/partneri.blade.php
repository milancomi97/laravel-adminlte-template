@extends('adminlte.layout.app')

@section('custom-styles')


@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">

        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content pl-5 pr-5 ">
            <div class="container pl-5 pr-5 border">

            <h2 class="pb-5 pt-2 text-center">Partneri</h2>
                <form>

                    <!--Row 1-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input1">Naziv</label>
                                <input type="text" class="form-control" id="input1" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input2">Skraceni naziv</label>
                                <input type="text" class="form-control" id="input2" placeholder="">
                            </div>
                        </div>
                    </div>
                    <!--Row 1 End-->

                    <!--Row 2-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input1">Adrese</label>
                                <input type="text" class="form-control" id="input1" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input2">Kontakt osoba</label>
                                <input type="text" class="form-control" id="input2" placeholder="">
                            </div>
                        </div>
                    </div>
                    <!--Row 2 End-->

                    <!--Row 3-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input1">Pib</label>
                                <input type="text" class="form-control" id="input1" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input2">Telefoni</label>
                                <input type="text" class="form-control" id="input2" placeholder="">
                            </div>
                        </div>
                    </div>
                    <!--Row 3 End-->



                    <!--Row 4-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input1">Web adresa</label>
                                <input type="text" class="form-control" id="input1" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input2">Email</label>
                                <input type="text" class="form-control" id="input2" placeholder="">
                            </div>
                        </div>
                    </div>
                    <!--Row 4 End-->



                    <!--Row 5-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input1">Sifra delatnosti</label>
                                <input type="text" class="form-control" id="input1" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input2">Odgovorno lice</label>
                                <input type="text" class="form-control" id="input2" placeholder="">
                            </div>
                        </div>
                    </div>
                    <!--Row 5 End-->


                    <!--Row 6-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input1">Maticni broj</label>
                                <input type="text" class="form-control" id="input1" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input2">Registarski broj</label>
                                <input type="text" class="form-control" id="input2" placeholder="">
                            </div>
                        </div>
                    </div>
                    <!--Row 6 End-->


                    <!-- Repeat the above row for Text Fields 3-12 -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="select1">Mesto</label>
                                <select class="form-control" id="select1">
                                    <option value="">Izaberi grad</option>
                                    <option value="">Svilajnac</option>
                                    <option value="">Smederevska Palanka</option>
                                    <option value="">Velika Plana</option>
                                    <!-- Add your options here -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="checkbox1">Komitent je u sistemu PDV-a</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                        Komitent je u sistemu PDV-a
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th>Racun</th>
                            <th>Naziv banke</th>
                            <th>Sediste banke</th>
                            <th>Prioriteti</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 4</td>
                        </tr>
                        <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-end">
                                <button type="button" class="btn btn-primary">Novi racun</button>
                                <button type="button" class="btn btn-secondary">Izmeni racun</button>
                                <button type="button" class="btn btn-success">Obrisi racun</button>
                            </div>
                        </div>
                    </div>

                    <div class="row pt-5">
                        <div class="col-md-12">
                                <div class="float-right">
                                <button type="submit" class="btn btn-primary">Potvrdi</button>
                                <button type="submit" class="btn btn-danger">Odustani</button>                            </div>
                        </div>
                    </div>


                </form>

            </div>
        </div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


@section('custom-scripts')
    <script src="{{asset('admin_assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>

@endsection

