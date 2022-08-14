<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // LLENADO DE DATOS PARA LA TABLA EMPLEADOS
        $empleado = new Empleado();
        
        $empleado->dni = "70893210";
        $empleado->nombre = "Bryan Amaya";
        $empleado->cargo = "Gerente General";
        
        $empleado->save();
        

        // LLENADO DE DATOS PARA LA TABLA PRODUCTOS
        
        $producto = new Producto();

        $producto->codigo = "001";
        $producto->marca = "Samsung";
        $producto->descripcion = "Samsung Galaxy S22 ultra";
        $producto->precio = "1999";

        $producto->save();


        $producto1 = new Producto();

        $producto1->codigo = "002";
        $producto1->marca = "Xiaomi";
        $producto1->descripcion = "Xiaomi 14 Pro Max";
        $producto1->precio = "2650";

        $producto1->save();


        $producto2 = new Producto();

        $producto2->codigo = "003";
        $producto2->marca = "Huawei";
        $producto2->descripcion = "Huawei p50 Pro";
        $producto2->precio = "1699";

        $producto2->save();


        // LLENADO DE DATOS PARA LA TABLA CLIENTES
        $cliente = new Cliente();
        
        $cliente->dni = "45893210";
        $cliente->nombre = "Gianmarco";
        $cliente->correo = "gianmarco@gmail.com";
        $cliente->celular = "957431233";
        
        $cliente->save();


        $cliente2 = new Cliente();
        
        $cliente2->dni = "54637843";
        $cliente2->nombre = "Cristiano Ronaldo";
        $cliente2->correo = "cr7@gmail.com";
        $cliente2->celular = "976492783";
        
        $cliente2->save();
    }
}
