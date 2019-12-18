<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		DB::table('listing_types')->insert([
            'name' => "Reserved Space",
            'type' => "room",
            'status' => "1",
            'added_by' => "1",
		]);
		DB::table('listing_types')->insert([
            'name' => "Separate Room",
            'type' => "room",
            'status' => "1",
			'added_by' => "1",
        ]);
		
		DB::table('listing_types')->insert([
            'name' => "Coffee Shop",
            'type' => "listing",
            'status' => "1",
			'added_by' => "1",
        ]);
		DB::table('listing_types')->insert([
            'name' => "Hotel",
            'type' => "listing",
            'status' => "1",
			'added_by' => "1",
        ]);
		DB::table('listing_types')->insert([
            'name' => "Restaurant",
            'type' => "listing",
            'status' => "1",
			'added_by' => "1",
        ]);
		
		DB::table('listing_types')->insert([
            'name' => "Air Conditioning",
            'type' => "amenities",
            'status' => "1",
			'added_by' => "1",
        ]);
		DB::table('listing_types')->insert([
            'name' => "Breakfast Menu",
            'type' => "amenities",
            'status' => "1",
			'added_by' => "1",
        ]);
		DB::table('listing_types')->insert([
            'name' => "Coffee Bar",
            'type' => "amenities",
            'status' => "1",
			'added_by' => "1",
        ]);
		DB::table('listing_types')->insert([
            'name' => "Dinner Menu",
            'type' => "amenities",
            'status' => "1",
			'added_by' => "1",
        ]);
		
		DB::table('listing_types')->insert([
            'name' => "City Centre",
            'type' => "facilities",
            'status' => "1",
			'added_by' => "1",
        ]);
		DB::table('listing_types')->insert([
            'name' => "Free Parking",
            'type' => "facilities",
            'status' => "1",
			'added_by' => "1",
        ]);
		DB::table('listing_types')->insert([
            'name' => "Inner City Centre",
            'type' => "facilities",
            'status' => "1",
			'added_by' => "1",
        ]);
		DB::table('listing_types')->insert([
            'name' => "Natural Light",
            'type' => "facilities",
            'status' => "1",
			'added_by' => "1",
        ]);
    }
}
