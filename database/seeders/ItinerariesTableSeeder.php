<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItinerariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('itineraries')->insert([
            [
                'trip_name' => 'Discover Northern Pakistan',
                'country' => 'Pakistan',
                'destinations' => 'Hunza, Skardu, Gilgit',
                'overview' => 'A scenic 7-day journey through the valleys and mountains of Northern Pakistan.',
                'suggested_dates' => 'June - August',
                'difficulty_level' => 'Moderate',
                'submitted_by' => 'Ayesha Sohail',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'Tokyo Cultural Experience',
                'country' => 'Japan',
                'destinations' => 'Tokyo, Shibuya, Akihabara',
                'overview' => 'Explore modern and traditional Japanese culture with this 5-day Tokyo itinerary.',
                'suggested_dates' => 'March - April',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Hiro Tanaka',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'European Adventure in Switzerland',
                'country' => 'Switzerland',
                'destinations' => 'Zurich, Lucerne, Interlaken',
                'overview' => 'A perfect 6-day getaway to the lakes, mountains, and scenic beauty of Switzerland.',
                'suggested_dates' => 'April - September',
                'difficulty_level' => 'Moderate',
                'submitted_by' => 'Emma Johnson',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'New York City Explorer',
                'country' => 'USA',
                'destinations' => 'Times Square, Central Park, Brooklyn Bridge',
                'overview' => 'A 4-day trip exploring iconic landmarks and vibrant city life in New York.',
                'suggested_dates' => 'All year',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Michael Brown',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
