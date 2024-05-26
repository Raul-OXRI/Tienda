<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventafactura extends Model
{
    use HasFactory;
    protected $table = 'ventafactura';
    Protected $primarykey = 'id';

    protected $fillable = ['id_cliente', 'id_personal', 'estado', 'detalleProducto','fecha_venta'];

    public function ventafactura(){
        return $this->hasMany(ventafactura::class, 'ventafactura');
    }
}
