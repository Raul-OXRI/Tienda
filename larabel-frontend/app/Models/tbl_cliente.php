<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_cliente extends Model
{
    use HasFactory;
    protected $table = 'tbl_clientes';
    Protected $primarykey = 'cod_cliente';

    protected $fillable = ['nombre', 'apellido', 'telefono', 'address'];

    public function clientes(){
        return $this->hasMany(tbl_clientes::class, 'clientes');
    }


}
