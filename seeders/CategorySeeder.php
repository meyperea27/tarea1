<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Juegos de Mesa']);
        Category::create(['name' => 'Peluches']);
        Category::create(['name' => 'Bloques de Construcción']);
        Category::create(['name' => 'Muñecas y Accesorios']);
        Category::create(['name' => 'Vehículos de Juguete']);
    }
}
