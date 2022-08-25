<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompra;
use App\Models\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $compras = Compra::select('*')->join('clientes', 'clientes.id', '=', 'compras.cliente_id')->join('productos', 'productos.id', '=', 'compras.producto_id')->get();
        // $compras = Compra::select('*')->join('clientes', 'clientes.codigoC', '=', 'compras.cliente_codigo')->join('productos', 'productos.codigoP', '=', 'compras.producto_codigo')->get();
        // return view('compras.index', compact('compras'));

        // $compras = Compra::all();
        return view('compras.index', compact('compras'));
    }

    public function pdf()
    {
        $compras = Compra::select('*')->join('clientes', 'clientes.id', '=', 'compras.cliente_id')->join('productos', 'productos.id', '=', 'compras.producto_id')->get();
        // $compras = Compra::all();
        //  return view('productos.pdf', compact('productos'));
        
        
        
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(view('compras.pdf', compact('compras')));
        // return $pdf->download('lista_compras.pdf');
        return $pdf->stream();
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompra $request)
    {
        $compra = Compra::create($request->all());
        return redirect()->route('compras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Compra $compra)
    {
        return view('compras.edit', compact('compra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCompra $request, Compra $compra)
    {
        $compra->update($request->all());

        return redirect()->route('compras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra $compra)
    {
        $compra->delete();
        return redirect()->route('compras.index');
    }
}
