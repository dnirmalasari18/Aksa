<?php

use Illuminate\Database\Seeder;

class Categories5TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories5s')->insert([
            'name'=>'Sosial'
        ]);
        DB::table('categories5s')->insert([
            'name'=>'Teknologi'
        ]);
        DB::table('categories5s')->insert([
            'name'=>'Pendidikan'
        ]);
    }
}
