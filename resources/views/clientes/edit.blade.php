@extends('adminlte::page')

@section('title', 'Editar Cliente')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('clientes.update', $cliente) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $cliente->nombre) }}">
                @error('nombre')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $cliente->email) }}">
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label>Teléfono</label>
                <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $cliente->telefono) }}">
                @error('telefono')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label>Foto actual</label><br>
                @if ($cliente->foto)
                    <img src="{{ asset('storage/' . $cliente->foto) }}" width="80" class="img-thumbnail mb-2">
                @else
                    <p class="text-muted">Sin foto</p>
                @endif
            </div>

            <div class="form-group">
                <label>Subir nueva foto</label>
                <input type="file" name="foto" class="form-control">
                @error('foto')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-primary">Actualizar</button>
        </form>

    </div>
</div>

@stop
