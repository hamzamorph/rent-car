<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'id'=>1,
            'cin'=>'z556677',
            'name'=>'Admin',
            'email'=>'admin@admin.ma',
            'tel'=> '0654544605',
            'ville' => 'Taza',
            'email_verified_at' => now(),
            'password'=> Hash::make('admin'),
            'remember_token' => Str::random(10),
            'admin'=> 1,
            'image'=> 'https://logodix.com/logo/1707097.png'
        ]);
    }
}
