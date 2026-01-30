@extends('adminlte::page')

@section('title', 'Nuevo Empleado')

@section('content_header')
    <h1>Nuevo Empleado</h1>
@stop

@section('content')
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label>Teléfono</label>
            <input type="text" name="telefono" class="form-control">
        </div>

        <div class="form-group">
            <label>Cargo</label>
            <input type="text" name="cargo" class="form-control">
        </div>

        <div class="form-group">
            <label>Salario</label>
            <input type="number" step="0.01" name="salario" class="form-control">
        </div>

        <button class="btn btn-primary">Guardar</button>
    </form>
@stop
