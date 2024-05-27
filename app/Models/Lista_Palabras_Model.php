<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Lista_Palabras_Model extends Model{
    use HasFactory;
    public $timestamps = false;
    protected $connection = 'mongodb';
    protected $collection = 'palabras';
    /*
    protected $table = 'palabras';
    protected $fillable = [
        'palabra'
    ];
    */
}
