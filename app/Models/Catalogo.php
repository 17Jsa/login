<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    protected $table = 'catalogo';
    public $timestamps = false;
    public function TomaDePedido()
    {
        return $this->hasMany(TomaDePedido::class, 'IdCatatalogo');
    }
}
