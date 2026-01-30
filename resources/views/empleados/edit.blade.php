@extends('adminlte::page')

@section('title', 'Editar Empleado')

@section('content_header')
    <h1>Editar Empleado</h1>
@stop

@section('content')
    <form action="{{ route('empleados.update', $empleado) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $empleado->nombre }}">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $empleado->email }}">
        </div>

        <div class="form-group">
            <label>Teléfono</label>
            <input type="text" name="telefono" class="form-control" value="{{ $empleado->telefono }}">
        </div>

        <div class="form-group">
            <label>Cargo</label>
            <input type="text" name="cargo" class="form-control" value="{{ $empleado->cargo }}">
        </div>

        <div class="form-group">
            <label>Salario</label>
            <input type="number" step="0.01" name="salario" class="form-control" value="{{ $empleado->salario }}">
        </div>

        <button class="btn btn-primary">Actualizar</button>
    </form>
@stop
