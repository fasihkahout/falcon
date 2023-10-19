<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $user = User::create ([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$Bqkj5MtmrdkUh9BKdzAae.fVmcxqyIh49W9aUVXgj1I2SEjEEBb9G', // password
            
        ]); 
        $user->assignRole('admin');  
    }
}
