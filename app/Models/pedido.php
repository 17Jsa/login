<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Catalogo;
class pedido extends Model
{
    protected $table = 'toma_de_pedido';
    public $timestamps = false;
    public function catalogo()
   {
    return $this->belongsTo(Catalogo::class, 'IdCatatalogo','id');
   }
    public function cliente( )
    {
        return $this->belongsTo(Cliente::class, 'CLIENTE_IDCLIENTE', 'id'); 
    }
    use HasFactory;
}
