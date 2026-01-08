<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $laptops = Category::create(['name' => 'Laptops', 'description' => 'Category for laptops']);
        $teclados = Category::create(['name' => 'Teclados', 'description' => 'Category for teclados']);

        Product::create([
            'name' => 'Laptop',
            'description' => 'Description for Laptop',
            'price' => 1200.50,
            'stock' => 10,
            'category_id' => $laptops->id,
            'image' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?q=80&w=2652&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);

        Product::create([
            'name' => 'Teclado Mecanico',
            'description' => 'Description for Teclado Mecanico',
            'price' => 250.75,
            'stock' => 25,
            'category_id' => $teclados->id,
            'image' => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);
    }
}
