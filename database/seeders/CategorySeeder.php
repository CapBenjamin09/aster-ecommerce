<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Provider\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Image($faker));

        $categoryNames = [
            'Ropa',
            'Electrónica',
            'Hogar y Jardín',
            'Deportes y Aire Libre',
            'Belleza y Cuidado Personal',
            'Juguetes y Juegos',
            'Libros y Medios',
            'Alimentos y Bebidas',
            'Muebles',
            'Joyería y Accesorios',
        ];

        // Inserta las categorías en la base de datos
        foreach ($categoryNames as $name) {
            DB::table('categories')->insert([
                'name' => $name,
                'image_path' => $faker->image('public/categories', 200, 200, 'cats', false),
            ]);
        }
    }
}
