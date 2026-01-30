@extends('adminlte::page')

@section('title', 'Facturas')

@section('content_header')
    <h1>Listado de Facturas</h1>
@stop

@section('content')
    <a href="{{ route('facturas.create') }}" class="btn btn-primary mb-3">Nueva Factura</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Empleado</th>
                <th>Fecha</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($facturas as $factura)
                <tr>
                    <td>{{ $factura->id }}</td>
                    <td>{{ $factura->cliente->nombre }}</td>
                    <td>{{ $factura->empleado->nombre }}</td>
                    <td>{{ $factura->fecha }}</td>
                    <td>{{ $factura->total }} €</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
