<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class JugadorModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $connection = 'mongodb';
    protected $collection = 'players';
    /*
    public $timestamps = false;
    protected $table = 'players';
    protected $fillable = [
        'Nombre',
        'Correo',
        'Telefono',
        'Resultado',
        'Tiempo'
    ];*/
}
