<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Elettronica', 'Sport', 'Casa', 'Consolle e Videogame', 'Motori', 'Fai da te', 'Abbigliamento', 'Salute', 'Multimedia', 'Libri', 'Infanzia', 'Animali'
        ];
        foreach($names as $name){
            Category::create(['name'=>$name]);
        }
    }
}
