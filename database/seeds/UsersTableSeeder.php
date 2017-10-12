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
        factory (User::class)->create(
        	[ 'name' => 'Admin Ganteng', 'email' => 'admin@gmail.com', 'password' => bcrypt('rahasia'), ]); factory(User::class)->create([ 'name' => 'Member Kece', 'email' => 'kece@gmail.com', 'password' => bcrypt('rahasia'), ]); factory(User::class)->create([ 'name' => 'Member Keren', 'email' => 'keren@gmail.com', 'password' => bcrypt('rahasia'), 
        	]
        );

    }
}
