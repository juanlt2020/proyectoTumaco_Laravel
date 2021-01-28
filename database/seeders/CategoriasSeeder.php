<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $categorias = [
            [
                'nombreCategoria' => 'Dispensa',
                'descripcion' => 'Productos dispensa diaria'
            ],
            [
                'nombreCategoria' => 'Bebidas',
                'descripcion' => 'Licores y Gaseosas'
            ],
            [
                'nombreCategoria' => 'Aseo Hogar',
                'descripcion' => 'Limpieza y Aseo'
            ],
        ];
        DB::table('categorias')->insert($categorias);
        
        
    }
}
