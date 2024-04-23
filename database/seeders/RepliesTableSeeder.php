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
            8 => 
            array (
                'id' => 15,
                'body' => 'test reply for mail',
                'replyAble_id' => 53,
                'replyAble_type' => 'threads',
                'author_id' => 5,
                'created_at' => '2024-04-05 11:55:54',
                'updated_at' => '2024-04-05 11:55:54',
            ),
            9 => 
            array (
                'id' => 16,
                'body' => 'Yo men',
                'replyAble_id' => 53,
                'replyAble_type' => 'threads',
                'author_id' => 7,
                'created_at' => '2024-04-05 11:59:03',
                'updated_at' => '2024-04-06 05:00:57',
            ),
            10 => 
            array (
                'id' => 20,
                'body' => 'cool product',
                'replyAble_id' => 53,
                'replyAble_type' => 'threads',
                'author_id' => 7,
                'created_at' => '2024-04-05 15:48:09',
                'updated_at' => '2024-04-05 15:48:09',
            ),
            11 => 
            array (
                'id' => 33,
                'body' => 'vhjvvhvhjvjhv',
                'replyAble_id' => 53,
                'replyAble_type' => 'threads',
                'author_id' => 7,
                'created_at' => '2024-04-05 17:28:23',
                'updated_at' => '2024-04-05 17:28:23',
            ),
            12 => 
            array (
                'id' => 37,
                'body' => 'i am fine',
                'replyAble_id' => 53,
                'replyAble_type' => 'threads',
                'author_id' => 7,
                'created_at' => '2024-04-06 04:24:51',
                'updated_at' => '2024-04-06 04:24:51',
            ),
            13 => 
            array (
                'id' => 39,
                'body' => 'naso',
                'replyAble_id' => 53,
                'replyAble_type' => 'threads',
                'author_id' => 7,
                'created_at' => '2024-04-06 04:35:42',
                'updated_at' => '2024-04-06 04:35:42',
            ),
            14 => 
            array (
                'id' => 40,
                'body' => 'Write something sensible',
                'replyAble_id' => 53,
                'replyAble_type' => 'threads',
                'author_id' => 7,
                'created_at' => '2024-04-06 04:41:07',
                'updated_at' => '2024-04-06 05:00:32',
            ),
            15 => 
            array (
                'id' => 41,
                'body' => 'ytyyeteerwere',
                'replyAble_id' => 53,
                'replyAble_type' => 'threads',
                'author_id' => 7,
                'created_at' => '2024-04-06 04:42:27',
                'updated_at' => '2024-04-06 04:42:27',
            ),
            16 => 
            array (
                'id' => 42,
                'body' => 'hvghgvhjgvjh',
                'replyAble_id' => 53,
                'replyAble_type' => 'threads',
                'author_id' => 7,
                'created_at' => '2024-04-06 04:49:18',
                'updated_at' => '2024-04-06 04:49:18',
            ),
            17 => 
            array (
                'id' => 44,
                'body' => 'hkjhbkjgh.kgiukghugtuit',
                'replyAble_id' => 53,
                'replyAble_type' => 'threads',
                'author_id' => 7,
                'created_at' => '2024-04-06 04:56:10',
                'updated_at' => '2024-04-06 04:56:10',
            ),
            18 => 
            array (
                'id' => 45,
                'body' => 'knn,nb,nb',
                'replyAble_id' => 53,
                'replyAble_type' => 'threads',
                'author_id' => 7,
                'created_at' => '2024-04-06 04:57:22',
                'updated_at' => '2024-04-06 04:57:22',
            ),
            19 => 
            array (
                'id' => 46,
                'body' => 'dfdfsdndnd',
                'replyAble_id' => 53,
                'replyAble_type' => 'threads',
                'author_id' => 7,
                'created_at' => '2024-04-06 04:59:55',
                'updated_at' => '2024-04-06 04:59:55',
            ),
            20 => 
            array (
                'id' => 49,
                'body' => 'This is a new reply',
                'replyAble_id' => 57,
                'replyAble_type' => 'threads',
                'author_id' => 4,
                'created_at' => '2024-04-22 06:57:35',
                'updated_at' => '2024-04-22 06:57:35',
            ),
            21 => 
            array (
                'id' => 50,
                'body' => 'I am trying again',
                'replyAble_id' => 60,
                'replyAble_type' => 'threads',
                'author_id' => 5,
                'created_at' => '2024-04-18 05:01:44',
                'updated_at' => '2024-04-18 05:01:44',
            ),
            22 => 
            array (
                'id' => 54,
                'body' => 'Hahahaha',
                'replyAble_id' => 60,
                'replyAble_type' => 'threads',
                'author_id' => 5,
                'created_at' => '2024-04-18 05:20:47',
                'updated_at' => '2024-04-18 05:20:47',
            ),
            23 => 
            array (
                'id' => 55,
                'body' => 'This is a new reply',
                'replyAble_id' => 65,
                'replyAble_type' => 'threads',
                'author_id' => 4,
                'created_at' => '2024-04-23 17:15:03',
                'updated_at' => '2024-04-23 17:15:03',
            ),
            24 => 
            array (
                'id' => 56,
                'body' => 'test reply for mail',
                'replyAble_id' => 64,
                'replyAble_type' => 'threads',
                'author_id' => 4,
                'created_at' => '2024-04-22 23:15:50',
                'updated_at' => '2024-04-22 23:15:50',
            ),
            25 => 
            array (
                'id' => 57,
                'body' => 'If you want to pass in a closure to filter the related models before checking if any of them exist.',
                'replyAble_id' => 64,
                'replyAble_type' => 'threads',
                'author_id' => 4,
                'created_at' => '2024-04-22 17:16:23',
                'updated_at' => '2024-04-22 17:16:23',
            ),
            26 => 
            array (
                'id' => 58,
                'body' => 'It’s not only convenient, but also super-easy to read and understand, even if you’re not a Laravel developer, right?',
                'replyAble_id' => 52,
                'replyAble_type' => 'threads',
                'author_id' => 4,
                'created_at' => '2024-04-20 17:17:44',
                'updated_at' => '2024-04-20 17:17:44',
            ),
            27 => 
            array (
                'id' => 59,
                'body' => 'nb vnmbvhbvhvhvhvhvhgv',
                'replyAble_id' => 51,
                'replyAble_type' => 'threads',
                'author_id' => 4,
                'created_at' => '2024-04-20 17:18:38',
                'updated_at' => '2024-04-20 17:18:38',
            ),
            28 => 
            array (
                'id' => 60,
                'body' => 'I am trying again',
                'replyAble_id' => 65,
                'replyAble_type' => 'threads',
                'author_id' => 5,
                'created_at' => '2024-04-23 21:00:04',
                'updated_at' => '2024-04-23 21:00:04',
            ),
            29 => 
            array (
                'id' => 61,
                'body' => 'nb vnmbvhbvhvhvhvhvhgv',
                'replyAble_id' => 59,
                'replyAble_type' => 'threads',
                'author_id' => 5,
                'created_at' => '2024-04-23 17:21:27',
                'updated_at' => '2024-04-23 17:21:27',
            ),
            30 => 
            array (
                'id' => 62,
                'body' => 'cool product',
                'replyAble_id' => 59,
                'replyAble_type' => 'threads',
                'author_id' => 5,
                'created_at' => '2024-04-23 20:21:44',
                'updated_at' => '2024-04-23 20:21:44',
            ),
            31 => 
            array (
                'id' => 63,
                'body' => 'test reply for mail',
                'replyAble_id' => 59,
                'replyAble_type' => 'threads',
                'author_id' => 5,
                'created_at' => '2024-04-23 19:22:16',
                'updated_at' => '2024-04-23 19:22:16',
            ),
            32 => 
            array (
                'id' => 64,
                'body' => 'This is a new reply',
                'replyAble_id' => 51,
                'replyAble_type' => 'threads',
                'author_id' => 5,
                'created_at' => '2024-04-20 17:22:56',
                'updated_at' => '2024-04-20 17:22:56',
            ),
            33 => 
            array (
                'id' => 65,
                'body' => 'his would assume that comments is defined on the Post model as:',
                'replyAble_id' => 59,
                'replyAble_type' => 'threads',
                'author_id' => 7,
                'created_at' => '2024-04-23 12:24:43',
                'updated_at' => '2024-04-23 12:24:43',
            ),
            34 => 
            array (
                'id' => 66,
                'body' => 'Hi! I added some short code snippets how I tried it so far.',
                'replyAble_id' => 59,
                'replyAble_type' => 'threads',
                'author_id' => 7,
                'created_at' => '2024-04-23 17:25:09',
                'updated_at' => '2024-04-23 17:25:09',
            ),
            35 => 
            array (
                'id' => 67,
                'body' => 'I am trying again',
                'replyAble_id' => 64,
                'replyAble_type' => 'threads',
                'author_id' => 7,
                'created_at' => '2024-04-22 19:26:48',
                'updated_at' => '2024-04-22 19:26:48',
            ),
            36 => 
            array (
                'id' => 68,
                'body' => 'Each higher order message can be accessed as a dynamic property on a collection instance. For instance, let\'s use the each higher order message to call a method on each object within a collection:',
                'replyAble_id' => 64,
                'replyAble_type' => 'threads',
                'author_id' => 7,
                'created_at' => '2024-04-23 20:30:24',
                'updated_at' => '2024-04-23 20:30:24',
            ),
            37 => 
            array (
                'id' => 69,
                'body' => 'You can use doesntHave and specify the boolean operator:',
                'replyAble_id' => 60,
                'replyAble_type' => 'threads',
                'author_id' => 8,
                'created_at' => '2024-04-20 17:30:11',
                'updated_at' => '2024-04-20 17:30:11',
            ),
        ));
        
        
    }
}