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
        DB::table('users')->insert([
            'name' => 'Fernando',
            'email' => 'fernandovieira.32@hotmail.com',
            'password' => bcrypt('97796978'),
        ]);
    }
}
