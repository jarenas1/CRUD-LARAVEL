<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<100;$i++){
            User::create([
                "names" => fake()->name,
                "email" => fake()->email,
                "password" => bcrypt('secret'), // Password is 'secret' for simplicity. Replace it with a stronger password.
            ]);
        }
    }
}
