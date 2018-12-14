<?php

use Illuminate\Database\Seeder;

class SubCatagorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('subcategories')->insert([
            'id' => 1,
            'name' => 'Koude drankjes',
            'categorie_id' =>  1,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        DB::table('subcategories')->insert([
            'id' => 2,
            'name' => 'Warme drankjes',
            'categorie_id' => 1,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        DB::table('subcategories')->insert([
            'id' => 3,
            'name' => 'Hoofdgerecht',
            'categorie_id' => 2,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        DB::table('subcategories')->insert([
            'id' => 4,
            'name' => 'Bijgerecht',
            'categorie_id' => 2,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        DB::table('subcategories')->insert([
            'id' => 5,
            'name' => 'Nagerecht',
            'categorie_id' => 2,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        DB::table('subcategories')->insert([
            'id' => 6,
            'name' => 'Gefrituurd',
            'categorie_id' => 3,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        DB::table('subcategories')->insert([
            'id' => 7,
            'name' => 'Toetje',
            'categorie_id' => 3,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
    }
}
