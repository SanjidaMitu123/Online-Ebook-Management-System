<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
           'name'=>'admin',
           'email'=>'admin@gmail.com',
           'password'=>bcrypt('123'),
           'phone_no'=>01711223344,
            'image'=> 'null',
            'role'=>'admin'
       ]);
       User::create([
        'name'=>'author',
        'email'=>'author@gmail.com',
        'password'=>bcrypt('123'),
        'phone_no'=>01711223344,
         'image'=> 'null',
         'role'=>'author'
    ]);
    User::create([
        'name'=>'reader',
        'email'=>'reader@gmail.com',
        'password'=>bcrypt('123'),
        'phone_no'=>01711223344,
         'image'=> 'null',
         'role'=>'reader'
    ]);
    }
}
