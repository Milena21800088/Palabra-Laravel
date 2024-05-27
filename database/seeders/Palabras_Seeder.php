<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class Palabras_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $palabras = [
            'perro', 'gatos', 'casas', 'arbol',
            'luces', 'extra', 'cielo', 'mares', 'monte', 'valle', 'nieve'
        ];
        foreach ($palabras as $palabra) {
            DB::table('palabras')->insert([
                'palabra' => $palabra,
            ]);
        }
    }
}
