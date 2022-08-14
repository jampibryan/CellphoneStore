<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Colaboradores') }}
            </h2>

            <x-button target="_blank" href="https://github.com/jampibryan/CellphoneStore" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>

        </div>

    </x-slot>

    <a href="{{ route('empleados.create') }}" class="w-16 bg-blue-600 py-2 px-4 italic text-2xl">REGISTRAR COLABORADOR</a>

    <div class="container flex justify-center mt-4">
        <table class="bg-blue-800  border-8 border-double border-black-400">
            <thead>
                <tr>
                    <th class="border text-center px-8 py-2 italic text-2xl">ID</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">DNI</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">NOMBRE</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">CARGO</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">SUELDO</th>
                    {{-- <th class="border text-center px-8 py-2 italic text-2xl">FECHA DE CONTRATO</th> --}}

                    <th class="border text-center px-8 py-2 italic text-2xl">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $empleado->id }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $empleado->dni }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $empleado->nombre }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $empleado->cargo }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">
                            @if ($empleado->cargo == 'Gerente General')
                                {{'S/. '. 3500}}
                                @elseif ($empleado->cargo == 'Supervisor')
                                {{'S/. '. 1800}}
                                @elseif ($empleado->cargo == 'Asistente')
                                {{'S/. '. 1000}}
                            @endif
                        </td>

                        <td class="border text-center px-4 py-2 italic text-base">
                            <a href="{{ route('empleados.edit', $empleado) }}" class="bg-blue-500 p-2">Editar</a>
                            <form action="{{ route('empleados.destroy', $empleado) }}" method="post">
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
