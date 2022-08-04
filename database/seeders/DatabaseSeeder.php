<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        // LLENADO DE DATOS PARA LA TABLA EMPLEADO
        $empleado = new Empleado();
        
        $empleado->dni = "70893210";
        $empleado->nombre = "Bryan Amaya";
        $empleado->cargo = "Gerente";
        
        $empleado->save();
        

        // LLENADO DE DATOS PARA LA TABLA PRODUCTO
        
        $producto = new Producto();

        $producto->codigo = "001";
        $producto->marca = "Samsung";
        $producto->descripcion = "Samsung Galaxy S22 ultra";
        $producto->precio = "5999";

        $producto->save();


        $producto1 = new Producto();

        $producto1->codigo = "002";
        $producto1->marca = "Iphone";
        $producto1->descripcion = "Iphone 14 Pro Max";
        $producto1->precio = "8650";

        $producto1->save();


        $producto2 = new Producto();

        $producto2->codigo = "003";
        $producto2->marca = "Huawei";
        $producto2->descripcion = "Huawei p50 Pro";
        $producto2->precio = "3699";

        $producto2->save();

    }
}
