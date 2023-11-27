<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table='Productos';

    protected $fillable=[
        'id_prod',
        'Nombre',
        'Descripcion',
        'Precio',
        'Stock'
    ];

    protected $primaryKey='id_prod';

    public $timestamps=false;
}
