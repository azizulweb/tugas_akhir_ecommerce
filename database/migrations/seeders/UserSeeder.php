<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'user',
            'email'=>'user@gmail.test',
            'email_verifed'=> 'user@gmail.test',
            'password'=>Hash::make('12345'),
            'role'=>'user'
        ]);

        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.test',
            'email_verifed'=> 'admin@gmail.test',
            'password'=>Hash::make('12345'),
            'role'=>'admin'
        ]);
    }
}
