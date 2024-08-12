<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    protected $table='detalleingreso';
    protected $primaryKey='iddetalle_ingreso';
    public $timestamps=false;
    
    protected $fillable =[
        'idingreso',
        'idarticulo',
        'cantidad',
        'precio_compra',
        'precio_venta'
    ];

    protected $guarded =[
        
    ];
    use HasFactory;
}
