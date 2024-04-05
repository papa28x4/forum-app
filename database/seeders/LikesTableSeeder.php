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
                'id' => 29,
                'user_id' => 6,
                'likeable_id' => 14,
                'likeable_type' => 'replies',
                'created_at' => '2024-04-02 05:53:28',
                'updated_at' => '2024-04-02 05:53:28',
            ),
            5 => 
            array (
                'id' => 30,
                'user_id' => 6,
                'likeable_id' => 13,
                'likeable_type' => 'replies',
                'created_at' => '2024-04-02 05:53:58',
                'updated_at' => '2024-04-02 05:53:58',
            ),
            6 => 
            array (
                'id' => 31,
                'user_id' => 6,
                'likeable_id' => 15,
                'likeable_type' => 'replies',
                'created_at' => '2024-04-02 05:54:07',
                'updated_at' => '2024-04-02 05:54:07',
            ),
            7 => 
            array (
                'id' => 32,
                'user_id' => 8,
                'likeable_id' => 14,
                'likeable_type' => 'replies',
                'created_at' => '2024-04-02 05:54:52',
                'updated_at' => '2024-04-02 05:54:52',
            ),
        ));
        
        
    }
}