<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FollowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('follows')->delete();
        
        \DB::table('follows')->insert(array (
            0 => 
            array (
                'user_id' => 4,
                'following_user_id' => 3,
                'created_at' => '2024-04-04 03:59:17',
                'updated_at' => '2024-04-04 03:59:17',
            ),
            1 => 
            array (
                'user_id' => 4,
                'following_user_id' => 6,
                'created_at' => '2024-04-04 04:08:07',
                'updated_at' => '2024-04-04 04:08:07',
            ),
            2 => 
            array (
                'user_id' => 7,
                'following_user_id' => 4,
                'created_at' => '2024-04-04 04:12:01',
                'updated_at' => '2024-04-04 04:12:01',
            ),
            3 => 
            array (
                'user_id' => 7,
                'following_user_id' => 6,
                'created_at' => '2024-04-04 04:10:08',
                'updated_at' => '2024-04-04 04:10:08',
            ),
        ));
        
        
    }
}