<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use residency\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->delete();
    	User::create(array(
    		'name'     => 'Chris Sevilleja',
    		'email'    => 'chris@scotch.io',
    		'password' => Hash::make('welcome'),
    	));
    }
}