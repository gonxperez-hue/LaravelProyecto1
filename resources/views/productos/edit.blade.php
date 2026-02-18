@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')
    <form action="{{ route('productos.update', $producto) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}">
            @error('nombre')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control">{{ $producto->descripcion }}</textarea>
        </div>

        <div class="form-group">
            <label>Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" value="{{ $producto->precio }}">
        </div>

        <div class="form-group">
            <label>Stock</label>
            <input type="number" name="stock" class="form-control" value="{{ $producto->stock }}">
        </div>

        <div class="form-group">
            <label>Documento actual</label><br>
            @if ($producto->documento)
                <a href="{{ asset('storage/' . $producto->documento) }}" class="btn btn-info btn-sm" download>
                    Descargar PDF
                </a>
            @else
                <p class="text-muted">Sin documento</p>
            @endif
        </div>

        <div class="form-group">
            <label>Subir nuevo documento (PDF)</label>
            <input type="file" name="documento" class="form-control">
            @error('documento')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button class="btn btn-primary">Actualizar</button>
    </form>
@stop
