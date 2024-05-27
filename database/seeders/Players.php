<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Players extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "Nombre" => "Diana",
            "Correo" => "Diana@gmail.com",
            "Telefono" => "329281292",
            "Resultado" => "Ganador",
            "Tiempo" => 90
        ];
        DB::table('players')->insert($data);
    }
}
