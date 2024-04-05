<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubscriptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subscriptions')->delete();
        
        \DB::table('subscriptions')->insert(array (
            0 => 
            array (
                'id' => 2,
                'user_id' => 8,
                'subscriptionable_type' => 'threads',
                'subscriptionable_id' => 53,
                'created_at' => '2024-04-02 16:58:38',
                'updated_at' => '2024-04-02 16:58:38',
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => 4,
                'subscriptionable_type' => 'threads',
                'subscriptionable_id' => 53,
                'created_at' => '2024-04-02 17:05:19',
                'updated_at' => '2024-04-02 17:05:19',
            ),
        ));
        
        
    }
}