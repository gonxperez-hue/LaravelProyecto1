<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                    Bienvenido al panel de gestión
                </h3>

                <div class="space-y-2">
                    <a href="{{ route('clientes.index') }}" class="text-blue-500 hover:underline">Clientes</a><br>
                    <a href="{{ route('productos.index') }}" class="text-blue-500 hover:underline">Productos</a><br>
                    <a href="{{ route('proveedores.index') }}" class="text-blue-500 hover:underline">Proveedores</a><br>
                    <a href="{{ route('empleados.index') }}" class="text-blue-500 hover:underline">Empleados</a><br>
                    <a href="{{ route('facturas.index') }}" class="text-blue-500 hover:underline">Facturas</a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
