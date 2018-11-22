// app/database/seeds/UserTableSeeder.php

<?php
use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{

public function run()
{
    
    DB::table('users')->insert([
        'name'     => 'John Cena',
        'email'    => 'basitalikhatri98@gmail.com',
        'password' => Hash::make('hello123'),
        'username' => 'John123',
        'address'  => 'karachi safoora',
        'nationality'  => 'pakistani',
        'age'  => '13',
        'phone'  => '03353020205',
    ]);
    /* User::create(array(
        'name'     => 'John Cena',
        'email'    => 'basitalikhatri98@gmail.com',
        'password' => Hash::make('hello123'),
        'username' => 'John123',
        'address'  => 'karachi safoora',
        'nationality'  => 'pakistani',
    )); */
}

}