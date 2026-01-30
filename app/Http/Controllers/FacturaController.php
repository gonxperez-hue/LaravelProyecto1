<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\FacturaDetalle;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Producto;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        $facturas = Factura::with('cliente', 'empleado')->get();
        return view('facturas.index', compact('facturas'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $empleados = Empleado::all();
        $productos = Producto::all();

        return view('facturas.create', compact('clientes', 'empleados', 'productos'));
    }

    public function store(Request $request)
    {
        $factura = Factura::create([
            'cliente_id' => $request->cliente_id,
            'empleado_id' => $request->empleado_id,
            'fecha' => $request->fecha,
            'total' => $request->total,
        ]);

        foreach ($request->productos as $i => $producto_id) {
            FacturaDetalle::create([
                'factura_id' => $factura->id,
                'producto_id' => $producto_id,
                'cantidad' => $request->cantidades[$i],
                'precio_unitario' => $request->precios[$i],
                'subtotal' => $request->subtotales[$i],
            ]);
        }

        return redirect()->route('facturas.index');
    }

    public function show(Factura $factura)
    {
        $factura->load('cliente', 'empleado', 'detalles.producto');
        return view('facturas.show', compact('factura'));
    }

    public function destroy(Factura $factura)
    {
        $factura->delete();
        return redirect()->route('facturas.index');
    }
}


