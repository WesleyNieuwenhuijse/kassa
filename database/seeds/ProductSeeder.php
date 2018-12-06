<?php

use Illuminate\Database\Seeder;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{

    /**
     *
     */
    public function run()
    {

        DB::table('products')->insert(['name' => 'Coca Cola Zero', 'cost_price' => 0.80, 'sale_price' => 1, 'subcategorie_id' => 1,'updated_at' => date('Y-m-d H:i:s'), 'created_at' => date('Y-m-d H:i:s')]);
    }

}