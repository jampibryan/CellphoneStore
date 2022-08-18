<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cliente;
use App\Models\Compra;
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
        
        $empleado->codigoE = "0101";
        $empleado->dniE = "70893210";
        $empleado->nombreE = "Bryan Amaya";
        $empleado->cargo = "Gerente General";
        
        $empleado->save();


        $empleado2 = new Empleado();
        
        $empleado2->codigoE = "0102";
        $empleado2->dniE = "45736410";
        $empleado2->nombreE = "Ricardo Gareca";
        $empleado2->cargo = "Supervisor";
        
        
        $empleado3 = new Empleado();
        
        $empleado3->codigoE = "0103";
        $empleado3->dniE = "65833210";
        $empleado->nombreE = "Jeferson Farfán";
        $empleado3->cargo = "Asistente";


        $empleado4 = new Empleado();

        $empleado4->codigoE = "0104";
        $empleado4->dniE = "64734290";
        $empleado4->nombreE = "Paolo Guerrero";
        $empleado4->cargo = "Asistente";
        
        

        // LLENADO DE DATOS PARA LA TABLA PRODUCTOS
        
        $producto1 = new Producto();

        $producto1->codigoP = "0001";
        $producto1->marca = "Samsung";
        $producto1->descripcion = "Samsung Galaxy S22 ultra";
        $producto1->precio = "1999";

        $producto1->save();


        $producto2 = new Producto();
        
        $producto2->codigoP = "0002";
        $producto2->marca = "Huawei";
        $producto2->descripcion = "Huawei p50 Pro";
        $producto2->precio = "2650";
        
        $producto2->save();
        
        
        $producto3 = new Producto();
        
        $producto3->codigoP = "0003";
        $producto3->marca = "Apple";
        $producto3->descripcion = "Apple s4 Pr";
        $producto3->precio = "2699";

        $producto3->save();


        $producto4 = new Producto();
        
        $producto4->codigoP = "0004";
        $producto4->marca = "Xiaomi";
        $producto4->descripcion = "Xiaomi 14 Pro Max";
        $producto4->precio = "1699";

        $producto4->save();


        $producto5 = new Producto();
        
        $producto5->codigoP = "0005";
        $producto5->marca = "LG";
        $producto5->descripcion = "LG Pro";
        $producto5->precio = "1299";

        $producto5->save();


        $producto6 = new Producto();
        
        $producto6->codigoP = "0006";
        $producto6->marca = "Motorola";
        $producto6->descripcion = "Motorola s6";
        $producto6->precio = "1599";

        $producto6->save();

        // LLENADO DE DATOS PARA LA TABLA CLIENTES
        $cliente1 = new Cliente();
        
        $cliente1->codigoC = "1001";
        $cliente1->dniC = "45893210";
        $cliente1->nombreC = "Gianmarco";
        $cliente1->correo = "gmarco@gmail.com";
        $cliente1->celular = "957431233";
        
        $cliente1->save();


        $cliente2 = new Cliente();
        
        $cliente2->codigoC = "1002";
        $cliente2->dniC = "78324413";
        $cliente2->nombreC = "Steve Jobs Peruano";
        $cliente2->correo = "sjobs@gmail.com";
        $cliente2->celular = "983423321";
        
        $cliente2->save();



        $cliente3 = new Cliente();
        
        $cliente3->codigoC = "1003";
        $cliente3->dniC = "67532398";
        $cliente3->nombreC = "Eva Ayllón";
        $cliente3->correo = "eayllon@gmail.com";
        $cliente3->celular = "943548901";
        
        $cliente3->save();


        //LLENADO DE DATOS PARA LA TABLA COMPRAS
        $compra = new Compra();
        
        $compra->cliente_id = 1;
        $compra->producto_id = 1;
        $compra->cantidad = 3;
        // $compra->transaccion = "1010";
        
        $compra->save();
    }
}
