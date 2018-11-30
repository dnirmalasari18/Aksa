<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        /*tugas 4
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);*/

        $this->call(Categories5TableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
