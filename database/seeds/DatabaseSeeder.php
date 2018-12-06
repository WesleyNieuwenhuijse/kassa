<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CatagorieSeeder::class);
        $this->call(SubcatagorieSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CustomerSeeder::class);
    }
}
