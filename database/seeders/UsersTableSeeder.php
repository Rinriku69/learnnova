<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 10,
                'name' => 'Admin_Pooh',
                'email' => 'siri@learnnova.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$QOKuLeNiCy.2azm9S2pmUOJx38gtuaLuAC/kk9r73iCtGZypl5VuC',
                'remember_token' => NULL,
                'role' => 'ADMIN',
                'img' => 'anonymous.jpg',
                'created_at' => '2025-10-05 16:36:02',
                'updated_at' => '2025-10-22 13:57:00',
            ),
            1 => 
            array (
                'id' => 12,
                'name' => 'FORDZAZA',
                'email' => 'Fordza@learnnoval.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$2kiv/tA28B/p0WiOHxAtAOEWauGZs/O8295/xPC3tpNUmG86uHElW',
                'remember_token' => NULL,
                'role' => 'USER',
                'img' => 'anonymous.jpg',
                'created_at' => '2025-10-05 16:56:12',
                'updated_at' => '2025-11-01 17:28:20',
            ),
            2 => 
            array (
                'id' => 13,
                'name' => 'Teacher',
                'email' => 'teacher@learnnova.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$98zZTqLSGe/yHKjNHXJe/OaE5EdxEneZ3v2do0D2CYyJW16kt/vXK',
                'remember_token' => NULL,
                'role' => 'EXPERT',
                'img' => 'anonymous.jpg',
                'created_at' => '2025-10-06 15:27:39',
                'updated_at' => '2025-10-06 15:28:51',
            ),
            3 => 
            array (
                'id' => 14,
                'name' => 'poohzz',
                'email' => 'mustafar1@learnnoval.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$MJpRZfesECCsHc1C80oZI.CtWShfu3JuyNcSfGjhc.UiEoSqqC3Zq',
                'remember_token' => NULL,
                'role' => 'USER',
                'img' => 'anonymous.jpg',
                'created_at' => '2025-10-20 12:30:16',
                'updated_at' => '2025-10-21 15:01:42',
            ),
            4 => 
            array (
                'id' => 15,
                'name' => 'teacher2',
                'email' => 'teacher2@learnnova.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$ieMb.esxePTUjMH5.x0RSunKXpK83B196NQsteHeyvWBkqPJYB9ju',
                'remember_token' => NULL,
                'role' => 'EXPERT',
                'img' => 'anonymous.jpg',
                'created_at' => '2025-10-22 06:12:21',
                'updated_at' => '2025-11-01 16:39:46',
            ),
            5 => 
            array (
                'id' => 17,
                'name' => 'amSocool123',
                'email' => 'student1@learnnova.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$V4zmoXtnL2Ep23fYMiBA5OzGPUFjquk7UWaAcyrDa8W9iqljC/4tO',
                'remember_token' => NULL,
                'role' => 'USER',
                'img' => 'anonymous.jpg',
                'created_at' => '2025-11-03 03:51:04',
                'updated_at' => '2025-11-03 05:02:03',
            ),
            6 => 
            array (
                'id' => 21,
                'name' => 'Admin',
                'email' => 'admin@learnnova.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$Z3l5wUd4COUNPjRJWZP0zel0ucslnUdjCjF6ykmdgvHi0qXDmyeE.',
                'remember_token' => NULL,
                'role' => 'ADMIN',
                'img' => 'anonymous.jpg',
                'created_at' => '2025-12-04 10:19:20',
                'updated_at' => '2025-12-04 10:19:20',
            ),
        ));
        
        
    }
}