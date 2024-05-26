<?php

namespace App\Http\Controllers;

use App\Models\Ventafactura;
use Illuminate\Http\Request;

class VentafacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Ventafactura::all();
        return view('./paginas/Ventafactura/views_Vfact',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('./paginas/Ventafactura/create_Vfact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Vfactura = new Ventafactura();
        $Vfactura->id_cliente = $request->get('id_cliente');
        $Vfactura->id_personal = $request->get('id_personal');
        $Vfactura->estado = $request->get('estado');
        $Vfactura->detalleproducto = $request->get('detalleproducto');
        $Vfactura->fecha_venta = $request->get('fecha_venta');
        $Vfactura->save();

        return redirect()->route('Ventafactura.index')->with('success','agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ventafactura  $ventafactura
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Ventafactura = Ventafactura::find($id);
        return view('./paginas/Ventafactura/destroy_Vfact',compact('Ventafactura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ventafactura  $ventafactura
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Ventafactura = Ventafactura::find($id);
        return view('./paginas/Ventafactura/update_Vfact',compact('Ventafactura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ventafactura  $ventafactura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Ventafactura = Ventafactura::find($id);
        $Ventafactura->id_cliente = $request->get('id_cliente');
        $Ventafactura->id_personal = $request->get('id_personal');
        $Ventafactura->estado = $request->get('estado');
        $Ventafactura->detalleproducto = $request->get('detalleproducto');
        $Ventafactura->fecha_venta = $request->get('fecha_venta');
        $Ventafactura->save();

        return redirect()->route('Ventafactura.index')->with('success','actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ventafactura  $ventafactura
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Ventafactura = Ventafactura::find($id);
        $Ventafactura->delete();
        return redirect()->route('Ventafactura.index')->with('success','Eliminado con exito');
    }
}
