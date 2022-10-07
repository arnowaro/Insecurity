<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            'label'=>'Pickpoket',
            'description'=>'pickpoket',
            'image'=>'\images\category\pickpocket.png',
        ]);

        Category::insert([
            'label'=>'Agression arme blanche',
            'description'=>'Agression',
            'image'=>'\images\category\couteau.png'
        ]);

        Category::insert([
            'label'=>'harcelement de rue',
            'description'=>'harcelement',
            'image'=>'\images\category\padanlaru.png'
        ]);

        Category::insert([
            'label'=>'Homicide',
            'description'=>'Homicide',
            'image'=>'\images\category\murder.png'
        ]);

        Category::insert([
            'label'=>'Vandalisme',
            'description'=>'Vandalisme',
            'image'=>'\images\category\vandalism.png'
        ]);

        Category::insert([
            'label'=>'Attaque de Requin',
            'description'=>'Attaque de Requin',
            'image'=>'\images\category\shark.png'
        ]);

        Category::insert([
            'label'=>'Attaque de Chien',
            'description'=>'Attaque de Chien',
            'image'=>'\images\category\dog.png'
        ]);


        Category::insert([
            'label'=>'Vol de voiture',
            'description'=>'vol de voiture',
            'image'=>'\images\category\car.png'
        ]);



        Category::insert([
            'label'=>'Fusillade',
            'description'=>'Fusillade',
            'image'=>'\images\category\gun.png'
        ]);

        Category::insert([
            'label'=>'Attentat terroriste',
            'description'=>'Attentat terroriste',
            'image'=>'\images\category\terrorist.png'
        ]);

        Category::insert([
            'label'=>'Incendie criminel',
            'description'=>'Incendie criminel',
            'image'=>'\images\category\fire.png'
        ]);



    }
}
