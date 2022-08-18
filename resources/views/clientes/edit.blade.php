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

    <div class="container mt-4">

        <form action="{{ route('clientes.update', $cliente) }}" method="post">
            @csrf

            @method('put') 

            <div class="mb-3 w-60">
                <label for="codigoC" class="form-label">CÓDIGO</label>
                <input id="codigoC" name="codigoC" type="text" maxlength="4" class="text-black"
                    value="{{ old('codigoC', $cliente->codigoC) }}">
                @error('codigoC')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3 w-60">
                <label for="dniC" class="form-label">DNI</label>
                <input id="dniC" name="dniC" type="number" class="text-black"
                    value="{{ old('dniC', $cliente->dniC) }}">
                @error('dniC')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3 w-60">
                <label for="nombreC" class="form-label">Nombre</label>
                <input id="nombreC" name="nombreC" type="text" class="text-black"
                    value="{{ old('nombreC', $cliente->nombreC) }}">
                @error('nombreC')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3 w-60">
                <label for="correo" class="form-label">Correo</label>
                <input id="correo" name="correo" type="text" class="text-black"
                    value="{{ old('correo', $cliente->correo) }}">
                @error('correo')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3 w-60">
                <label for="celular" class="form-label">Celular</label>
                <input id="celular" name="celular" type="number" class="text-black"
                    value="{{ old('celular', $cliente->celular) }}">
                @error('celular')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <a href="{{ route('clientes.index') }}" class="bg-blue-800 p-2 text-white ml-20">Cancelar</a>
                <button type="submit" class="bg-red-600 p-2 text-white">Actualizar</button>
            </div>
        </form>
    </div>
</x-app-layout>
