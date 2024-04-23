<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('likes')->delete();
        
        \DB::table('likes')->insert(array (
            0 => 
            array (
                'id' => 11,
                'user_id' => 4,
                'likeable_id' => 53,
                'likeable_type' => 'threads',
                'created_at' => '2024-04-01 21:50:56',
                'updated_at' => '2024-04-01 21:50:56',
            ),
            1 => 
            array (
                'id' => 12,
                'user_id' => 6,
                'likeable_id' => 53,
                'likeable_type' => 'threads',
                'created_at' => '2024-04-01 21:51:47',
                'updated_at' => '2024-04-01 21:51:47',
            ),
            2 => 
            array (
                'id' => 26,
                'user_id' => 7,
                'likeable_id' => 53,
                'likeable_type' => 'threads',
                'created_at' => '2024-04-02 04:49:15',
                'updated_at' => '2024-04-02 04:49:15',
            ),
            3 => 
            array (
                'id' => 28,
                'user_id' => 8,
                'likeable_id' => 53,
                'likeable_type' => 'threads',
                'created_at' => '2024-04-02 04:55:09',
                'updated_at' => '2024-04-02 04:55:09',
            ),
            4 => 
            array (
                'id' => 31,
                'user_id' => 6,
                'likeable_id' => 15,
                'likeable_type' => 'replies',
                'created_at' => '2024-04-02 05:54:07',
                'updated_at' => '2024-04-02 05:54:07',
            ),
            5 => 
            array (
                'id' => 33,
                'user_id' => 5,
                'likeable_id' => 60,
                'likeable_type' => 'threads',
                'created_at' => '2024-04-18 05:24:05',
                'updated_at' => '2024-04-18 05:24:05',
            ),
            6 => 
            array (
                'id' => 34,
                'user_id' => 5,
                'likeable_id' => 59,
                'likeable_type' => 'threads',
                'created_at' => '2024-04-20 17:21:02',
                'updated_at' => '2024-04-20 17:21:02',
            ),
            7 => 
            array (
                'id' => 35,
                'user_id' => 7,
                'likeable_id' => 68,
                'likeable_type' => 'replies',
                'created_at' => '2024-04-23 20:32:14',
                'updated_at' => '2024-04-23 20:32:14',
            ),
            8 => 
            array (
                'id' => 37,
                'user_id' => 7,
                'likeable_id' => 64,
                'likeable_type' => 'threads',
                'created_at' => '2024-04-23 20:40:25',
                'updated_at' => '2024-04-23 20:40:25',
            ),
            9 => 
            array (
                'id' => 38,
                'user_id' => 5,
                'likeable_id' => 64,
                'likeable_type' => 'threads',
                'created_at' => '2024-04-23 20:40:57',
                'updated_at' => '2024-04-23 20:40:57',
            ),
            10 => 
            array (
                'id' => 39,
                'user_id' => 5,
                'likeable_id' => 56,
                'likeable_type' => 'replies',
                'created_at' => '2024-04-23 20:41:03',
                'updated_at' => '2024-04-23 20:41:03',
            ),
            11 => 
            array (
                'id' => 40,
                'user_id' => 5,
                'likeable_id' => 57,
                'likeable_type' => 'replies',
                'created_at' => '2024-04-23 20:41:08',
                'updated_at' => '2024-04-23 20:41:08',
            ),
        ));
        
        
    }
}