<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('course_user')->delete();
        
        \DB::table('course_user')->insert(array (
            0 => 
            array (
                'user_id' => 12,
                'course_id' => 13,
                'created_at' => '2025-10-08 14:13:47',
                'updated_at' => '2025-10-08 14:13:47',
            ),
            1 => 
            array (
                'user_id' => 12,
                'course_id' => 23,
                'created_at' => '2025-10-14 08:22:25',
                'updated_at' => '2025-10-14 08:22:25',
            ),
            2 => 
            array (
                'user_id' => 12,
                'course_id' => 27,
                'created_at' => '2025-10-21 15:08:54',
                'updated_at' => '2025-10-21 15:08:54',
            ),
            3 => 
            array (
                'user_id' => 15,
                'course_id' => 13,
                'created_at' => '2025-10-22 06:34:35',
                'updated_at' => '2025-10-22 06:34:35',
            ),
            4 => 
            array (
                'user_id' => 15,
                'course_id' => 23,
                'created_at' => '2025-10-22 06:41:58',
                'updated_at' => '2025-10-22 06:41:58',
            ),
            5 => 
            array (
                'user_id' => 17,
                'course_id' => 24,
                'created_at' => '2025-11-03 04:46:03',
                'updated_at' => '2025-11-03 04:46:03',
            ),
            6 => 
            array (
                'user_id' => 17,
                'course_id' => 40,
                'created_at' => '2025-11-03 04:46:30',
                'updated_at' => '2025-11-03 04:46:30',
            ),
            7 => 
            array (
                'user_id' => 17,
                'course_id' => 38,
                'created_at' => '2025-11-03 04:47:14',
                'updated_at' => '2025-11-03 04:47:14',
            ),
            8 => 
            array (
                'user_id' => 12,
                'course_id' => 24,
                'created_at' => '2025-11-03 07:16:38',
                'updated_at' => '2025-11-03 07:16:38',
            ),
        ));
        
        
    }
}