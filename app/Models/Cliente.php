<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Cliente extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;
    protected $table= 'cliente';
    public $timestamps = false; 

    public function TomaDePedido()
    {
        return $this->hasMany(TomaDePedido::class, 'CLIENTE_IDCLIENTE');
    }
    protected $fillable = [
        
        'IDENTIFICACION',
        'CONTRASENA',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'CONTRASENA',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        
    ];
}
