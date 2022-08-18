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


    <div class="container mt-4">
        <form action="{{ route('compras.store') }}" method="post">
            @csrf

            <div class="mb-3 w-60">
                <label for="cliente_id" class="form-label">idCliente</label>
                <input id="cliente_id" name="cliente_id" type="number" class="text-black" maxlength="4"
                    tabindex="1" value="{{ old('cliente_id') }}">
                @error('cliente_id')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3 w-60">
                <label for="producto_id" class="form-label">idProducto</label>
                <input id="producto_id" name="producto_id" type="number" class="text-black" maxlength="4"
                    tabindex="1" value="{{ old('producto_id') }}">
                @error('producto_id')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3 w-60">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input id="cantidad" name="cantidad" type="number" class="text-black" maxlength="4"
                    tabindex="1" value="{{ old('cantidad') }}">
                @error('cantidad')
                    <small>*{{ $message }}</small>
                @enderror
            </div>


            {{-- <div class="mb-3 w-60">
                <label for="transaccion" class="form-label">Transacción</label>
                <input id="transaccion" name="transaccion" type="text" class="text-black" maxlength="4"
                    tabindex="1" value="{{ old('transaccion') }}">
                @error('transaccion')
                    <small>*{{ $message }}</small>
                @enderror
            </div> --}}
            


            <a href="{{ route('compras.index') }}" class="bg-blue-800 p-2 text-white ml-20">Cancelar</a>
            <button type="submit" class="bg-red-600 p-2 text-white">Comprar</button>
        </form>

    </div>

</x-app-layout>
