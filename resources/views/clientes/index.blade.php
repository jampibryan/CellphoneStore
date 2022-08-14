<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Clientes') }}
            </h2>

            <x-button target="_blank" href="https://github.com/jampibryan/CellphoneStore" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>

        </div>

    </x-slot>

    <a href="{{ route('clientes.create') }}" class="w-16 bg-blue-600 py-2 px-4 italic text-2xl">REGISTRAR CLIENTE</a>

    <div class="container flex justify-center mt-4">
        <table class="bg-blue-800  border-8 border-double border-black-400">
            <thead>
                <tr>
                    <th class="border text-center px-8 py-2 italic text-2xl">ID</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">DNI</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">NOMBRE</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">CORREO</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">CELULAR</th>

                    <th class="border text-center px-8 py-2 italic text-2xl">ACCIONES</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $cliente->id }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $cliente->dni }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $cliente->nombre }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $cliente->correo }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $cliente->celular }}</td>
                        

                        <td class="border text-center px-4 py-2 italic text-base">
                            <a href="{{ route('clientes.edit', $cliente) }}" class="bg-blue-500 p-2">Editar</a>
                            <form action="{{ route('clientes.destroy', $cliente) }}" method="post">
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
