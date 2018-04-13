<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
          'name' => 'Komputasi Numerik',
          'slug' => str_slug('Komputasi Numerik'),
        ]);
        Category::create([
          'name' => 'Rekayasa Perangkat Lunak',
          'slug' => str_slug('Rekayasa Perangkat Lunak'),
        ]);
        Category::create([
          'name' => 'Struktur Data',
          'slug' => str_slug('Struktur Data'),
        ]);
        Category::create([
          'name' => 'Basis Data',
          'slug' => str_slug('Basis Data'),
        ]);
        Category::create([
          'name' => 'Organisasi dan Arsitektur Komputer',
          'slug' => str_slug('Organisasi dan Arsitektur Komputer'),
        ]);
        Category::create([
          'name' => 'Bahasa Pemrograman',
          'slug' => str_slug('Bahasa Pemrograman'),
        ]);
        Category::create([
          'name' => 'Metode Kuantitatif',
          'slug' => str_slug('Metode Kuantitatif'),
        ]);
    }
}
