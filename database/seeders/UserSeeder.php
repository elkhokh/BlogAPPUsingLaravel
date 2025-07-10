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
        //معانها ان عايز المشروع يبدا ويكون اليوزر دا موجود
        $user =User::create([
        'name' => 'sara',
        'email'=> 'sara@gmail.com2',
        'password'=>Hash::make("sara123456"),
    ]);
    }
}
