<!doctype html>
<html lang="en">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <h5 class=" font-weight-bold">Lista de compras </h5>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    {{-- <th>ID</th> --}}
                    <th>Cliente</th>
                    <th>Producto</th>
                    <th>cantidad</th>
                    <th>Precio Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($compras as $compra)
                    <tr>
                        {{-- <td>{{ $compra->id }}</td> --}}
                        <td>{{ $compra->nombreC }}</td>
                        <td>{{ $compra->descripcion }}</td>
                        <td>{{ $compra->cantidad }}</td>
                        <td>S/. {{ $compra->precio * $compra->cantidad }}</td>
                    </tr>
                    {{-- @empty --}}
                    {{-- @endforelse --}}
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>
