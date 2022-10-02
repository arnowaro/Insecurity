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
            'image'=>'\images\category\1K3rORoOD84dzaw5O3pkVLRowpwQwjHP4Omj8hPG.svg'
        ]);

        Category::insert([
            'label'=>'Agression arme blanche',
            'description'=>'Agression',
            'image'=>'\images\category\1K3rORoOD84dzaw5O3pkVLRowpwQwjHP4Omj8hPG.svg'
        ]);

        Category::insert([
            'label'=>'harcelement de rue',
            'description'=>'harcelement',
            'image'=>'\images\subcategory\thfNCdgsiFaj3Npqq9FraWJ4XzUJuZANPL31oYgd.svg'
        ]);

        Category::insert([
            'label'=>'Homicide',
            'description'=>'Homicide',
            'image'=>'\images\subcategory\cpmmo28VQ87CZXR9AHOSvhVz9ZDeKHV8d6Zv34xL.svg'
        ]);

        Category::insert([
            'label'=>'Vandalisme',
            'description'=>'Vandalisme',
            'image'=>'\images\subcategory\thfNCdgsiFaj3Npqq9FraWJ4XzUJuZANPL31oYgd.svg'
        ]);









    }
}
