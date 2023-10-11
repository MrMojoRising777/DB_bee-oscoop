<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // USER SEED
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin',
                'password' => 'admin1'
            ]
        ]);
        // THEATER SEED
        DB::table('theaters')->insert([
            [
                'name' => 'Screen 1'
            ],
            [
                'name' => 'Screen 2'
            ],
            [
                'name' => 'Screen 3'
            ]
        ]);

        // Define the theater IDs, rows, and the number of seats per row.
        $theaterIds = [1, 2, 3];
        $rows = ['A', 'B', 'C', 'D', 'E'];
        $numSeatsPerRow = 10;

        // Loop through each theater, row, and seat to insert data
        foreach ($theaterIds as $theaterId) {
            foreach ($rows as $row) {
                for ($seatNumber = 1; $seatNumber <= $numSeatsPerRow; $seatNumber++) {
                    DB::table('seats')->insert([
                        'theater_id' => $theaterId,
                        'row' => $row,
                        'seat_number' => $seatNumber,
                        'is_available' => 1, // Assuming all seats are initially available
                    ]);
                }
            }
        };
    }
}
