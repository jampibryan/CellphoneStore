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
    
    <form action="{{route('productos.update', $producto)}}" method="post">
        @csrf

        @method('put')

        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input id="codigo" name="codigo" type="text" class="form-control" value="{{old('codigo', $producto->codigo)}}"> 
        </div>
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{old('nombre', $producto->nombre)}}"> 
        </div>
        
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1"> 
                {{old('descripcion', $producto->descripcion)}}
            </textarea>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{old('precio', $producto->precio)}}"> 
        </div>

        <a href="{{route('productos.index')}}" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-dark">Actualizar</button>
    </form>

</x-app-layout>
