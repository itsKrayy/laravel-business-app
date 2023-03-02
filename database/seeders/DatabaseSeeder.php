<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        DB::table('product')->insert([
            'productTitle' => 'KrayyEssentials',
            'desc' => 'Basic Drums loops, oneshots, FXs, and vocals for Music Production'
        ]);

        DB::table('product')->insert([
            'productTitle' => 'Sounds of KSHMR Vol. 5',
                'desc' => 'Fundamental Sounds from the Sounds of KSHMR series. Complete Edition'
        ]);

        DB::table('product')->insert([
            'productTitle' => 'Cymatics Future House Essentials',
                'desc' => 'Sounds and Samples for House Music genre. Consist of House Kick, Snares, Fills, and FXs.'
        ]);

        DB::table('product')->insert([
            'productTitle' => 'Dharma Orchestral Essentials',
                'desc' => 'Fundamental instruments and sounds for Orchestra Production'
        ]);

        DB::table('product')->insert([
            'productTitle' => 'Cymatics Trap Essentials',
                'desc' => 'Sounds and Samples for Trap Music genre. Consist of House Kick, Snares, Fills, and FXs.'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
