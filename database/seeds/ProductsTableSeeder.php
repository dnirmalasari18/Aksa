<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('productions')->insert([
            'category_id'=>'1',
            'name'=>'Kemeja',
            'description'=>'Kemeja indah nan rupawan',
            'price'=>'100000'
        ]);
        DB::table('productions')->insert([
            'category_id'=>'1',
            'name'=>'Kaos',
            'price'=>'50000'
        ]);
        DB::table('productions')->insert([
            'category_id'=>'2',
            'name'=>'Air putih dingin',
            'description'=>'Minuman menyegarkan penghilang dahaga',
            'price'=>'10000'
        ]);
        DB::table('productions')->insert([
            'category_id'=>'1',
            'name'=>'Teh',
            'price'=>'5000'
        ]);
    }
}
