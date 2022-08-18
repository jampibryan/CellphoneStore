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

        <form action="{{ route('empleados.update', $empleado) }}" method="post">
            @csrf

            @method('put')

            <div class="mb-3 w-60">
                <label for="codigoE" class="form-label">CÓDIGO</label>
                <input id="codigoE" name="codigoE" type="number" class="text-black"
                    value="{{ old('codigoE', $empleado->codigoE) }}">
                @error('codigoE')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3 w-60">
                <label for="dniE" class="form-label">DNI</label>
                <input id="dniE" name="dniE" type="text" class="text-black"
                    value="{{ old('dniE', $empleado->dniE) }}">
                @error('dniE')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3 w-60">
                <label for="nombreE" class="form-label">Nombre</label>
                <input id="nombreE" name="nombreE" type="text" class="text-black"
                    value="{{ old('nombreE', $empleado->nombreE) }}">
                @error('nombreE')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3 w-60">
                <label for="cargo" class="form-label">Cargo</label>
                <select name="cargo" class="text-black">
                    <option disabled selected>Cargo a Desempeñar</option>
                    <option value="Gerente General">Gerente General</option>
                    <option value="Supervisor">Supervisor</option>
                    <option value="Asistente">Asistente</option>
                </select>
                @error('cargo')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <a href="{{ route('empleados.index') }}" class="bg-blue-800 p-2 text-white ml-20">Cancelar</a>
                <button type="submit" class="bg-red-600 p-2 text-white">Actualizar</button>
            </div>
        </form>
    </div>
</x-app-layout>
