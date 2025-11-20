<?php

namespace Database\Seeders;

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
                'difficulty_level' => 'Medium',
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
                'overview' => 'A 6-day escape exploring lakes, mountains, and scenic towns.',
                'suggested_dates' => 'April - September',
                'difficulty_level' => 'Medium',
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

            [
                'trip_name' => 'Historic Istanbul Getaway',
                'country' => 'Turkey',
                'destinations' => 'Hagia Sophia, Blue Mosque, Grand Bazaar',
                'overview' => 'Experience the perfect blend of history and culture in Istanbul.',
                'suggested_dates' => 'April - October',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Fatima Celik',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'Dubai Modern City Tour',
                'country' => 'UAE',
                'destinations' => 'Burj Khalifa, Dubai Mall, Palm Jumeirah',
                'overview' => 'A 3-day luxurious and modern city experience in Dubai.',
                'suggested_dates' => 'October - March',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Omar Abdullah',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'Romantic Italy Escape',
                'country' => 'Italy',
                'destinations' => 'Rome, Venice, Florence',
                'overview' => 'A 7-day cultural and romantic trip through Italy’s most iconic cities.',
                'suggested_dates' => 'May - September',
                'difficulty_level' => 'Medium',
                'submitted_by' => 'Isabella Rossi',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'Sydney Coastal Adventure',
                'country' => 'Australia',
                'destinations' => 'Sydney Opera House, Bondi Beach, Blue Mountains',
                'overview' => 'A 6-day outdoor and coastal adventure in Sydney.',
                'suggested_dates' => 'September - March',
                'difficulty_level' => 'Medium',
                'submitted_by' => 'Liam Wilson',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],

            [
                'trip_name' => 'Spiritual Trip to Makkah',
                'country' => 'Saudi Arabia',
                'destinations' => 'Masjid al-Haram, Mina, Arafat',
                'overview' => 'A peaceful and spiritual journey for pilgrims and visitors.',
                'suggested_dates' => 'All year',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Ahmed Saud',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'London City Highlights',
                'country' => 'United Kingdom',
                'destinations' => 'London Eye, Big Ben, Buckingham Palace',
                'overview' => 'A 4-day trip to explore historic and modern attractions in London.',
                'suggested_dates' => 'All year',
                'difficulty_level' => 'Medium',
                'submitted_by' => 'Oliver Smith',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'trip_name' => 'Thailand Island Hopping',
                'country' => 'Thailand',
                'destinations' => 'Phuket, Phi Phi Islands, Krabi',
                'overview' => 'A 5-day tropical adventure exploring beautiful beaches, crystal-clear waters, and vibrant nightlife.',
                'suggested_dates' => 'November - April',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Napat Ratanakorn',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'Canada Rockies Expedition',
                'country' => 'Canada',
                'destinations' => 'Banff, Lake Louise, Jasper',
                'overview' => 'A breathtaking 6-day journey through Canada’s most beautiful mountain landscapes and lakes.',
                'suggested_dates' => 'June - September',
                'difficulty_level' => 'Hard',
                'submitted_by' => 'Emily Carter',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'Explore Cairo & The Pyramids',
                'country' => 'Egypt',
                'destinations' => 'Giza Pyramids, Cairo Museum, Khan El Khalili',
                'overview' => 'A 4-day historical tour exploring ancient Egyptian wonders and vibrant local markets.',
                'suggested_dates' => 'October - April',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Youssef Hassan',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'Bali Nature & Culture Retreat',
                'country' => 'Indonesia',
                'destinations' => 'Ubud, Kuta, Mount Batur',
                'overview' => 'A relaxing and adventurous 6-day trip combining temples, beaches, waterfalls, and volcano sunrise hikes.',
                'suggested_dates' => 'April - October',
                'difficulty_level' => 'Medium',
                'submitted_by' => 'Suriati Pranata',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
