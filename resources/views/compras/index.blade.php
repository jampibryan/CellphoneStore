<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Compras') }}
            </h2>

            <x-button target="_blank" href="https://github.com/jampibryan/CellphoneStore" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>

        </div>

    </x-slot>

    <a href="{{ route('compras.create') }}" class="w-16 bg-blue-600 py-2 px-4 italic text-2xl">REGISTRAR COMPRAS</a>
    <a href="{{route('compras.pdf') }}" class="w-16 bg-red-600 py-2 px-4 italic text-2xl">PDF</a>


    <div class="container flex justify-center mt-4">
        <table class="bg-blue-800  border-8 border-double border-black-400">
            <thead>
                <tr>
                    {{-- <th class="border text-center px-8 py-2 italic text-2xl">ID</th> --}}
                    <th class="border text-center px-8 py-2 italic text-2xl">Cliente</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">Producto</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">Cantidad</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">PrecioTotal</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">Transacción</th>

                    <th class="border text-center px-8 py-2 italic text-2xl">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($compras as $compra)
                    <tr>
                        {{-- <td class="border text-center px-4 py-2 italic text-2xl text-white">{{$compra->id}}</td> --}}
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{$compra->nombreC}}</td>
                        {{-- <td class="border text-center px-4 py-2 italic text-2xl text-white">{{$compra->producto_id}}</td> --}}
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{$compra->descripcion}}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{$compra->cantidad}}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">S/. {{($compra->precio)*($compra->cantidad)}}</td>
                        {{-- <td class="border text-center px-4 py-2 italic text-2xl text-white">{{$compra->transaccion}}</td> --}}
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{mt_rand(1000,9999)}}</td>

                        {{-- {{-- <td class="border text-center px-4 py-2 italic text-2xl text-white">{{$compra->transaccion}}</td> --}}
                        

                        <td class="border text-center px-4 py-2 italic text-base">
                            <a href="{{ route('compras.edit', $compra) }}" class="bg-blue-500 p-2">Editar</a>
                            <form action="{{ route('compras.destroy', $compra) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="bg-red-600 p-2 text-white mt-4">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</x-app-layout>
