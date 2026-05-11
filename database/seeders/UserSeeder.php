<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            'name' => 'Shoxjaxon',
            'email' => 'shoxjaxonsobirjonov77@gmail.com',
            'password' => Hash::make('87654321'),
            'usertype' => 'admin',
            'user_id' => 1,
        ]);
    }
}
