<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Productos') }}
            </h2>

            <x-button target="_blank" href="https://github.com/jampibryan/CellphoneStore" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>

        </div>

    </x-slot>


    <div class="container mt-4">
        <form action="{{ route('productos.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="codigo" class="form-label">Código</label>
                <input id="codigo" name="codigo" type="text" class="text-black" tabindex="1"
                    value="{{ old('codigo') }}">
                @error('codigo')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input id="marca" name="marca" type="text" class="text-black" tabindex="2"
                    value="{{ old('marca') }}">
                @error('marca')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea id="descripcion" name="descripcion" type="text" class="text-black" tabindex="1"> 
                {{ old('descripcion') }}
            </textarea>
                @error('descripcion')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input id="precio" name="precio" type="number" step="any" class="text-black">
                @error('precio')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <a href="{{ route('productos.index') }}" class="bg-blue-800 p-2 text-white ml-20">Cancelar</a>
            <button type="submit" class="bg-red-600 p-2 text-white">Crear</button>
        </form>

    </div>

</x-app-layout>
