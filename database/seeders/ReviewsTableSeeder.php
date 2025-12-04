<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 2,
                'user_id' => 15,
                'course_id' => 13,
                'rating' => 3,
                'comment' => 'aasd',
                'created_at' => '2025-10-22 06:12:34',
                'updated_at' => '2025-10-22 06:34:44',
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => 15,
                'course_id' => 23,
                'rating' => 5,
                'comment' => 'a',
                'created_at' => '2025-10-22 06:43:36',
                'updated_at' => '2025-10-22 06:43:36',
            ),
            2 => 
            array (
                'id' => 6,
                'user_id' => 17,
                'course_id' => 24,
                'rating' => 1,
                'comment' => 'NO mammoth',
                'created_at' => '2025-11-03 04:46:17',
                'updated_at' => '2025-11-03 04:46:17',
            ),
            3 => 
            array (
                'id' => 7,
                'user_id' => 17,
                'course_id' => 40,
                'rating' => 3,
                'comment' => 'Very good very nice 😘',
                'created_at' => '2025-11-03 04:47:01',
                'updated_at' => '2025-11-03 04:47:01',
            ),
            4 => 
            array (
                'id' => 8,
                'user_id' => 17,
                'course_id' => 38,
                'rating' => 1,
                'comment' => 'Too hard',
                'created_at' => '2025-11-03 04:47:26',
                'updated_at' => '2025-11-03 04:47:26',
            ),
            5 => 
            array (
                'id' => 9,
                'user_id' => 12,
                'course_id' => 13,
                'rating' => 4,
                'comment' => 'Nice Course but nuh uh',
                'created_at' => '2025-11-03 05:35:36',
                'updated_at' => '2025-11-03 05:41:01',
            ),
            6 => 
            array (
                'id' => 10,
                'user_id' => 12,
                'course_id' => 24,
                'rating' => 4,
                'comment' => 'Good',
                'created_at' => '2025-11-03 07:17:23',
                'updated_at' => '2025-11-03 07:17:23',
            ),
        ));
        
        
    }
}