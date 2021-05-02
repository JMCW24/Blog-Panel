<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' =>'Admin',
            'email' => 'Admin@admin.com',
            'password' => bcrypt('admin'),
        ])->assignRole('Admin');
        
        User::create([
            'name' =>'Admin2',
            'email' => 'Admin2@admin.com',
            'password' => bcrypt('admin'),
        ])->assignRole('Editor');
        
        User::create([
            'name' =>'Admin3',
            'email' => 'Admin3@admin.com',
            'password' => bcrypt('admin'),
        ])->assignRole('Usuario');
    }
}
