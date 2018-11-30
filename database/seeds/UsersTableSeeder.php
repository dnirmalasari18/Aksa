<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Aye aye',
            'email'=>'ayeaye@email.com',
            'username'=>'ayeee',
            'password'=>bcrypt('1234'),
        ]);
    }
}
