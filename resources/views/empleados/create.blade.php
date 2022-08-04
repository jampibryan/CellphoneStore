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


    <div class="container mt-4">
        <form action="{{ route('empleados.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="dni" class="form-label">DNI</label>
                <input id="dni" name="dni" type="text" class="text-black" maxlength="8"
                    tabindex="1" value="{{ old('dni') }}">
                @error('dni')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">NOMBRE</label>
                <input id="nombre" name="nombre" type="text" class="text-black" tabindex="2"
                    value="{{ old('nombre') }}">
                @error('nombre')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <select name="cargo" class="text-black">
                <option disabled selected>Cargo a Desempeñar</option>
                <option value="Gerente">Gerente</option>
                <option value="Supervisor">Supervisor</option>
                <option value="Asistente">Asistente</option>
            </select>

            @error('cargo')
                <small>*{{ $message }}</small>
            @enderror

            <a href="{{ route('empleados.index') }}" class="bg-blue-800 p-2 text-white ml-20">Cancelar</a>
            <button type="submit" class="bg-red-600 p-2 text-white">Crear</button>
        </form>

    </div>

</x-app-layout>
