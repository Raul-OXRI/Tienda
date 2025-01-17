<?php

namespace App\Http\Controllers;

use App\Models\tbl_persona;
use Illuminate\Http\Request;

class TblPersonaController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new tbl_persona();
        $data = $request->except('_token');
        $persona::created($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbl_persona  $tbl_persona
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_persona $tbl_persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbl_persona  $tbl_persona
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_persona $tbl_persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbl_persona  $tbl_persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_persona $tbl_persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbl_persona  $tbl_persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_persona $tbl_persona)
    {
        //
    }
}
