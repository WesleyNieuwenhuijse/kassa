<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class CatagorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => '1',
            'name' => 'Drankjes',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        DB::table('categories')->insert([
            'id' => '2',
            'name' => 'Gerechten',
            'created_at' => NOW(),
            'updated_at' => NOW()

        ]);
        DB::table('categories')->insert([
            'id' => '3',
            'name' => 'Snacks',
            'created_at' => NOW(),
            'updated_at' => NOW()

        ]);

    }
}
