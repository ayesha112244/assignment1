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
            'destinations' => 'Hunza, Skardu, Gilgit',
            'overview' => 'A scenic 7-day journey through the valleys and mountains of Northern Pakistan.',
            'suggested_dates' => 'June - August',
            'difficulty_level' => 'Moderate',
            'submitted_by' => 'Ayesha Sohail',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'trip_name' => 'Beach Escape to Gwadar',
            'destinations' => 'Gwadar, Ormara, Kund Malir',
            'overview' => 'Relax and enjoy the beaches of Balochistan with this coastal 4-day itinerary.',
            'suggested_dates' => 'October - February',
            'difficulty_level' => 'Easy',
            'submitted_by' => 'Ali Khan',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'trip_name' => 'Adventure Trek to Fairy Meadows',
            'destinations' => 'Fairy Meadows, Nanga Parbat Base Camp',
            'overview' => 'A 5-day adventure trek for thrill-seekers and nature lovers.',
            'suggested_dates' => 'May - September',
            'difficulty_level' => 'Challenging',
            'submitted_by' => 'Sara Ahmed',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
