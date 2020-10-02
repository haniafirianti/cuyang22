<?php

use Illuminate\Database\Seeder;

class CategoryProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('category_products')->insert([
            'category_name' => 'Makanan',
        ]);

         DB::table('category_products')->insert([
            'category_name' => 'Minuman',
        ]);
    }
}
