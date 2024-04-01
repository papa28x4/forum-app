<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('replies')->delete();
        
        \DB::table('replies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'body' => '<div>jghghgvjhvjhv</div>',
                'replyAble_id' => 53,
                'replyAble_type' => 'App\\Models\\Thread',
                'author_id' => 3,
                'created_at' => '2024-03-02 23:13:06',
                'updated_at' => '2024-03-02 23:13:06',
            ),
            1 => 
            array (
                'id' => 2,
                'body' => 'Another reply updated 20',
                'replyAble_id' => 53,
                'replyAble_type' => 'App\\Models\\Thread',
                'author_id' => 6,
                'created_at' => '2024-03-03 08:23:47',
                'updated_at' => '2024-03-30 14:59:56',
            ),
            2 => 
            array (
                'id' => 3,
                'body' => '<div>Third Reply Mehn</div>',
                'replyAble_id' => 53,
                'replyAble_type' => 'App\\Models\\Thread',
                'author_id' => 7,
                'created_at' => '2024-03-03 08:52:39',
                'updated_at' => '2024-03-03 08:52:39',
            ),
            3 => 
            array (
                'id' => 4,
                'body' => 'This is a new reply',
                'replyAble_id' => 53,
                'replyAble_type' => 'App\\Models\\Thread',
                'author_id' => 7,
                'created_at' => '2024-03-03 11:06:34',
                'updated_at' => '2024-03-03 11:06:34',
            ),
            4 => 
            array (
                'id' => 5,
                'body' => 'test reply for mail',
                'replyAble_id' => 53,
                'replyAble_type' => 'App\\Models\\Thread',
                'author_id' => 3,
                'created_at' => '2024-03-04 20:07:33',
                'updated_at' => '2024-03-04 20:07:33',
            ),
            5 => 
            array (
                'id' => 6,
                'body' => 'I am trying again',
                'replyAble_id' => 53,
                'replyAble_type' => 'App\\Models\\Thread',
                'author_id' => 6,
                'created_at' => '2024-03-04 20:24:44',
                'updated_at' => '2024-03-04 20:24:44',
            ),
            6 => 
            array (
                'id' => 7,
                'body' => 'I am trying again',
                'replyAble_id' => 53,
                'replyAble_type' => 'App\\Models\\Thread',
                'author_id' => 6,
                'created_at' => '2024-03-04 20:25:58',
                'updated_at' => '2024-03-04 20:25:58',
            ),
            7 => 
            array (
                'id' => 10,
                'body' => 'cool product',
                'replyAble_id' => 53,
                'replyAble_type' => 'App\\Models\\Thread',
                'author_id' => 3,
                'created_at' => '2024-03-30 04:29:22',
                'updated_at' => '2024-03-30 04:29:22',
            ),
        ));
        
        
    }
}