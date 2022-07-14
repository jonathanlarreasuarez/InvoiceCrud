<!-- create.blade.php -->

@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div>
        <a href="{{ route('invoices.index')}}" class="btn btn-primary">Invoices</a>
    </div>
    <div class="card uper">
        <div class="card-header">
            Add Games Data
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('invoices.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="country_name">Razon social:</label>
                    <input type="text" value="" class="form-control" name="inv_razonSocial"/>
                </div>
                <div class="form-group">
                    <label for="cases">nombreComercial :</label>
                    <input type="text" value="" class="form-control" name="inv_nombreComercial"/>
                </div>
                <div class="form-group">
                    <label for="cases">dirEstablecimiento :</label>
                    <input type="text" value="" class="form-control" name="inv_dirEstablecimiento"/>
                </div>
                <div class="form-group">
                    <label for="cases">Ruc :</label>
                    <input type="text" value="" class="form-control" name="inv_ruc"/>
                </div>
                <div class="form-group">
                    <label for="cases">FechaEmision :</label>
                    <input type="date" value="" class="form-control" name="inv_fechaEmision"/>
                </div>
                <div class="form-group">
                    <label for="cases">obligadoContabilidad :</label>
                    <input type="text" value="" class="form-control" name="inv_obligadoContabilidad"/>
                </div>
                <div class="form-group">
                    <label for="cases">NumeroAutorizacionDocumento :</label>
                    <input type="text" value="" class="form-control" name="inv_numeroAutorizacionDocumento"/>
                </div>
                <div class="form-group">
                    <label for="cases">Establecimiento :</label>
                    <input type="text" value="" class="form-control" name="inv_establecimiento"/>
                </div>
                <div class="form-group">
                    <label for="cases">ptoEmision :</label>
                    <input type="text" value="" class="form-control" name="inv_ptoEmision"/>
                </div>
                <div class="form-group">
                    <label for="cases">secuencial :</label>
                    <input type="text" value="" class="form-control" name="inv_secuencial"/>
                </div>
                <div class="form-group">
                    <label for="cases">identificacionComprador :</label>
                    <input type="text" value="" class="form-control" name="inv_identificacionComprador"/>
                </div>
                <div class="form-group">
                    <label for="cases">razonSocialComprador :</label>
                    <input type="text" value="" class="form-control" name="inv_razonSocialComprador"/>
                </div>
                <div class="form-group">
                    <label for="cases">direccionComprador :</label>
                    <input type="text" value="" class="form-control" name="inv_direccionComprador"/>
                </div>
                <div class="form-group">
                    <label for="cases">telefonoComprador :</label>
                    <input type="text" value="" class="form-control" name="inv_telefonoComprador"/>
                </div>
                <div class="form-group">
                    <label for="cases">emailComprador :</label>
                    <input type="text" value="" class="form-control" name="inv_emailComprador"/>
                </div>
                <div class="form-group">
                    <label for="cases">totalSinImpuestos :</label>
                    <input type="text" value="" class="form-control" name="inv_totalSinImpuestos"/>
                </div>
                <div class="form-group">
                    <label for="cases">totalDescuento :</label>
                    <input type="text" value="" class="form-control" name="inv_totalDescuento"/>
                </div>
                <div class="form-group">
                    <label for="cases">totalImpuestoIva :</label>
                    <input type="text" value="" class="form-control" name="inv_totalImpuestoIva"/>
                </div>
                <div class="form-group">
                    <label for="cases">Importe total :</label>
                    <input type="text" value="" class="form-control" name="inv_importeTotal"/>
                </div>
                <div class="form-group">
                    <label for="cases">Moneda :</label>
                    <input type="text" value="" class="form-control" name="inv_moneda"/>
                </div>
                <button type="submit" class="btn btn-primary">Add Invoice</button>
            </form>
        </div>
    </div>
@endsection
