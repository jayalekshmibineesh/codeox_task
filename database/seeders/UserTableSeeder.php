<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
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
            'place'=>'calicut',
            'email'=>'admin@gmail.com',
            'contact'=>'56674893',
            'password'=>bcrypt('admin123'),
            'type'=>'admin',
        
        ]);

    }
}
