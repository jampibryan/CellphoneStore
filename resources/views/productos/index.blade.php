<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Productos') }}
            </h2>

            <x-button target="_blank" href="https://github.com/jampibryan" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>

        </div>

    </x-slot>
    
    <a href="{{route('productos.create')}}" class="btn btn-danger d-flex justify-content-center" >CREAR PRODUCTO</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Código</th>
                <th scope="col">Producto</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->codigo }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>
                        <a href="{{ route('productos.edit', $producto) }}" class="btn btn-info">Editar</a>
                        <form action="{{ route('productos.destroy', $producto) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger mt-1">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>



</x-app-layout>
