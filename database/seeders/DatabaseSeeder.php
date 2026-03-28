<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Check if test user exists
        if (!User::where('email', 'test@example.com')->exists()) {
            User::factory()->create([
                'name' => 'Player One',
                'email' => 'test@example.com',
                'password' => bcrypt('password'),
            ]);
        }

        if (!User::where('email', 'owner@example.com')->exists()) {
            User::factory()->create([
                'name' => 'Owner',
                'email' => 'owner@example.com',
                'password' => bcrypt('password'),
            ]);
        }

        $courts = [
            ['name' => 'Central Glass Court (Indoor)', 'price_per_hour' => 45.00, 'status' => 'active'],
            ['name' => 'Panoramic West Court', 'price_per_hour' => 38.00, 'status' => 'active'],
            ['name' => 'Elite Training Court 03', 'price_per_hour' => 32.00, 'status' => 'active'],
            ['name' => 'Open Air Sky Court', 'price_per_hour' => 25.00, 'status' => 'active'],
        ];

        foreach ($courts as $courtData) {
            \App\Models\Court::firstOrCreate(
                ['name' => $courtData['name']],
                $courtData
            );
        }
    }
}
