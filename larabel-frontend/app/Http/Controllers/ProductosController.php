<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = productos::all();
        return view('./paginas/productos/views_products',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('./paginas/productos/create_products');
    }


    public function store(Request $request)
    {
        //sirve para guardar los datos insert.
        //print_r($_GET);
        
        $product = new Productos();
        $product->p_Categoria = $request->get('p_Categoria');
        $product->p_Nombre = $request->get('p_Nombre');
        $product->p_Stock = $request->get('p_Stock');
        $product->p_Descripcion = $request->get('p_Descripcion');
        $product->p_Imagen = $request->get('p_Imagen');
        $product->p_Estado = $request->get('p_Estado');
        $product->save();

        return redirect()->route('products.index')->with('success','agregado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Productos::find($id);
        return view('./paginas/productos/destroy_products',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Productos::find($id);
        return view('./paginas/productos/update_products',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Productos::find($id);
        $product->p_Categoria = $request->get('p_Categoria');
        $product->p_Nombre = $request->get('p_Nombre');
        $product->p_Stock = $request->get('p_Stock');
        $product->p_Descripcion = $request->get('p_Descripcion');
        $product->p_Imagen = $request->get('p_Imagen');
        $product->p_Estado = $request->get('p_Estado');
        $product->save();

        return redirect()->route('products.index')->with('success','actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Productos::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('success','Eliminado con exito');
    }
}
