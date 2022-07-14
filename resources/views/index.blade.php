<!-- index.blade.php -->

@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div>
        <a href="{{ route('invoices.create')}}" class="btn btn-primary">Add Invoice</a>
    </div>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Razon Social</td>
                <td>Nombre Comercial</td>
                <td>Numero Autorizacion Documento</td>
                <td>Establecimiento</td>
                <td>Punto Emision</td>
                <td>Secuencial</td>
                <td>Identificacion Comprador</td>
                <td>Razon Social Comprador</td>
                <td>ImporteTotal</td>
                <td colspan="3">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($invoices as $game)
                <tr>
                    <td>{{$game->id}}</td>
                    <td>{{$game->inv_razonSocial}}</td>
                    <td>{{$game->inv_nombreComercial}}</td>
                    <td>{{$game->inv_numeroAutorizacionDocumento}}</td>
                    <td>{{$game->inv_establecimiento}}</td>
                    <td>{{$game->inv_ptoEmision}}</td>
                    <td>{{$game->inv_secuencial}}</td>
                    <td>{{$game->inv_importeTotal}}</td>
                    <td>{{$game->inv_razonSocialComprador}}</td>
                    <td><a href="{{ route('invoices.edit', $game->id)}}" class="btn btn-primary">Edit</a></td>
                    <td><a href="{{ route('pdf', $game->id) }}" class="btn btn-primary">PDF</a></td>
                    <td>
                        <form action="{{ route('invoices.destroy', $game->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection
