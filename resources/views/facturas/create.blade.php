@extends('adminlte::page')

@section('title', 'Nueva Factura')

@section('content_header')
    <h1>Nueva Factura</h1>
@stop

@section('content')
<form action="{{ route('facturas.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-md-4">
            <label>Cliente</label>
            <select name="cliente_id" class="form-control">
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label>Empleado</label>
            <select name="empleado_id" class="form-control">
                @foreach($empleados as $empleado)
                    <option value="{{ $empleado->id }}">{{ $empleado->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label>Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ date('Y-m-d') }}">
        </div>
    </div>

    <hr>

    <h4>Líneas de factura</h4>

    <table class="table" id="tabla-detalles">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Subtotal</th>
                <th></th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <button type="button" class="btn btn-success" id="btn-add">Añadir línea</button>

    <hr>

    <h3>Total: <span id="total">0.00</span> €</h3>
    <input type="hidden" name="total" id="input-total">

    <button class="btn btn-primary mt-3">Guardar Factura</button>
</form>

<script>
    let productos = @json($productos);

    document.getElementById('btn-add').addEventListener('click', function () {
        let tbody = document.querySelector('#tabla-detalles tbody');

        let fila = document.createElement('tr');

        fila.innerHTML = `
            <td>
                <select name="productos[]" class="form-control producto-select">
                    ${productos.map(p => `<option value="${p.id}" data-precio="${p.precio}">${p.nombre}</option>`).join('')}
                </select>
            </td>
            <td><input type="number" name="cantidades[]" class="form-control cantidad" value="1"></td>
            <td><input type="number" name="precios[]" class="form-control precio" step="0.01" readonly></td>
            <td><input type="number" name="subtotales[]" class="form-control subtotal" step="0.01" readonly></td>
            <td><button type="button" class="btn btn-danger btn-sm btn-delete">X</button></td>
        `;

        tbody.appendChild(fila);

        actualizarFila(fila);
        actualizarTotal();

        fila.querySelector('.producto-select').addEventListener('change', () => {
            actualizarFila(fila);
            actualizarTotal();
        });

        fila.querySelector('.cantidad').addEventListener('input', () => {
            actualizarFila(fila);
            actualizarTotal();
        });

        fila.querySelector('.btn-delete').addEventListener('click', () => {
            fila.remove();
            actualizarTotal();
        });
    });

    function actualizarFila(fila) {
        let select = fila.querySelector('.producto-select');
        let precio = select.selectedOptions[0].dataset.precio;
        let cantidad = fila.querySelector('.cantidad').value;

        fila.querySelector('.precio').value = precio;
        fila.querySelector('.subtotal').value = (precio * cantidad).toFixed(2);
    }

    function actualizarTotal() {
        let subtotales = document.querySelectorAll('.subtotal');
        let total = 0;

        subtotales.forEach(s => total += parseFloat(s.value || 0));

        document.getElementById('total').innerText = total.toFixed(2);
        document.getElementById('input-total').value = total.toFixed(2);
    }
</script>
@stop
