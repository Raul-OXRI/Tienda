<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_persona extends Model
{
    use HasFactory;
    protected $table = 'tbl_persona';
    protected $primaryKey = 'cod_user';

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'nit',
        'dpi',
        'direccion',
        'password',
        'estado',
        'cod_rol'
    ];


    public function persona(){
        return $this->hasMany(tbl_persona::class, 'cod_user');
    }

    public function tbl_rol()
    {
        return $this->belongsTo(tbl_rol::class, 'cod_rol');
    }

}
