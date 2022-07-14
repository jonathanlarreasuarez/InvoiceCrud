@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Game Data
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
            <form method="post" action="{{ route('invoices.update', $invoice->id ) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="country_name">Game Name:</label>
                    <input type="text" class="form-control" name="name" value="{{ $invoice->inv_razonSocial }}"/>
                </div>



                <div class="form-group">
                    @csrf
                    <label for="country_name">Razon social:</label>
                    <input type="text" value="{{ $invoice->inv_razonSocial }}" class="form-control" name="inv_razonSocial"/>
                </div>
                <div class="form-group">
                    <label for="cases">nombreComercial :</label>
                    <input type="text" value="{{ $invoice->inv_nombreComercial }}" class="form-control" name="inv_nombreComercial"/>
                </div>
                <div class="form-group">
                    <label for="cases">dirEstablecimiento :</label>
                    <input type="text" value="{{ $invoice->inv_dirEstablecimiento }}" class="form-control" name="inv_dirEstablecimiento"/>
                </div>
                <div class="form-group">
                    <label for="cases">Ruc :</label>
                    <input type="text" value="{{ $invoice->inv_ruc }}" class="form-control" name="inv_ruc"/>
                </div>
                <div class="form-group">
                    <label for="cases">FechaEmision :</label>
                    <input type="date" value="{{ $invoice->inv_fechaEmision }}" class="form-control" name="inv_fechaEmision"/>
                </div>
                <div class="form-group">
                    <label for="cases">obligadoContabilidad :</label>
                    <input type="text" value="{{ $invoice->inv_obligadoContabilidad }}" class="form-control" name="inv_obligadoContabilidad"/>
                </div>
                <div class="form-group">
                    <label for="cases">NumeroAutorizacionDocumento :</label>
                    <input type="text" value="{{ $invoice->inv_numeroAutorizacionDocumento }}" class="form-control" name="inv_numeroAutorizacionDocumento"/>
                </div>
                <div class="form-group">
                    <label for="cases">Establecimiento :</label>
                    <input type="text" value="{{ $invoice->inv_establecimiento }}" class="form-control" name="inv_establecimiento"/>
                </div>
                <div class="form-group">
                    <label for="cases">ptoEmision :</label>
                    <input type="text" value="{{ $invoice->inv_ptoEmision }}" class="form-control" name="inv_ptoEmision"/>
                </div>
                <div class="form-group">
                    <label for="cases">secuencial :</label>
                    <input type="text" value="{{ $invoice->inv_secuencial }}" class="form-control" name="inv_secuencial"/>
                </div>
                <div class="form-group">
                    <label for="cases">identificacionComprador :</label>
                    <input type="text" value="{{ $invoice->inv_identificacionComprador }}" class="form-control" name="inv_identificacionComprador"/>
                </div>
                <div class="form-group">
                    <label for="cases">razonSocialComprador :</label>
                    <input type="text" value="{{ $invoice->inv_razonSocialComprador }}" class="form-control" name="inv_razonSocialComprador"/>
                </div>
                <div class="form-group">
                    <label for="cases">direccionComprador :</label>
                    <input type="text" value="{{ $invoice->inv_direccionComprador }}" class="form-control" name="inv_direccionComprador"/>
                </div>
                <div class="form-group">
                    <label for="cases">telefonoComprador :</label>
                    <input type="text" value="{{ $invoice->inv_telefonoComprador }}" class="form-control" name="inv_telefonoComprador"/>
                </div>
                <div class="form-group">
                    <label for="cases">emailComprador :</label>
                    <input type="text" value="{{ $invoice->inv_emailComprador }}" class="form-control" name="inv_emailComprador"/>
                </div>
                <div class="form-group">
                    <label for="cases">totalSinImpuestos :</label>
                    <input type="text" value="{{ $invoice->inv_totalSinImpuestos }}" class="form-control" name="inv_totalSinImpuestos"/>
                </div>
                <div class="form-group">
                    <label for="cases">totalDescuento :</label>
                    <input type="text" value="{{ $invoice->inv_totalDescuento }}" class="form-control" name="inv_totalDescuento"/>
                </div>
                <div class="form-group">
                    <label for="cases">totalImpuestoIva :</label>
                    <input type="text" value="{{ $invoice->inv_totalImpuestoIva }}" class="form-control" name="inv_totalImpuestoIva"/>
                </div>
                <div class="form-group">
                    <label for="cases">Importe total :</label>
                    <input type="text" value="{{ $invoice->inv_importeTotal }}" class="form-control" name="inv_importeTotal"/>
                </div>
                <div class="form-group">
                    <label for="cases">Moneda :</label>
                    <input type="text" value="{{ $invoice->inv_moneda }}" class="form-control" name="inv_moneda"/>
                </div>
                <button type="submit" class="btn btn-primary">Update Data</button>
            </form>
        </div>
    </div>
@endsection
