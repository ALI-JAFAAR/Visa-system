<?php

use Illuminate\Database\Seeder;

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
        	'name'		=> 'ALI',
        	'address'	=> 'Baghdad Al-Hurrya',
        	'phone'		=> '07736657369',
        	'phone2'	=> '07736657369',
            'email'     => 'alijafaar0@gmail.com',
            'logo'		=> '00ertyuiyterwqerty0',
            'username'  => 'ali',
            'password'  => bcrypt('123123'),
            'money'	    => '1000',
        ]);
    }
}
