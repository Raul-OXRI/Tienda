<?php

namespace App\Http\Controllers;

use App\Models\tbl_cliente;
use Illuminate\Http\Request;

class TblClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //inicia definición de index
        $datos = tbl_cliente::all();
        
        return view('./paginas/clientes/views_clientes',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('.paginas/clientes/create_clientes');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cliente = new tbl_cliente();
        
        $data = $request->except("_token");
        
        $data['validacion'] = 1;
        
        $cliente::create($data); 

        return redirect()->route("clientes.index")->with("success","Agregado con exito!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbl_cliente  $tbl_cliente
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_cliente $tbl_cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbl_cliente  $tbl_cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_cliente $tbl_cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbl_cliente  $tbl_cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_cliente $tbl_cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbl_cliente  $tbl_cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_cliente $tbl_cliente)
    {
        //
    }
}
