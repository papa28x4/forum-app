<?php

namespace Database\Seeders;

use App\Traits\HasForeignKeys;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    use HasForeignKeys;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKey();  

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Feedback',
                'slug' => 'feedback',
                'created_at' => '2024-02-17 01:05:43',
                'updated_at' => '2024-02-17 01:05:43',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Suggestions',
                'slug' => 'suggestions',
                'created_at' => '2024-02-17 01:05:43',
                'updated_at' => '2024-02-17 01:05:43',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Events',
                'slug' => 'events',
                'created_at' => '2024-02-17 01:05:43',
                'updated_at' => '2024-02-17 01:05:43',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Announcements',
                'slug' => 'announcements',
                'created_at' => '2024-02-17 01:05:43',
                'updated_at' => '2024-02-17 01:05:43',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Technical Assistance',
                'slug' => 'technical-assistance',
                'created_at' => '2024-02-17 01:05:43',
                'updated_at' => '2024-02-17 01:05:43',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'General',
                'slug' => 'general',
                'created_at' => '2024-02-17 01:05:43',
                'updated_at' => '2024-02-17 01:05:43',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Off-Topic',
                'slug' => 'off-topic',
                'created_at' => '2024-02-17 01:05:43',
                'updated_at' => '2024-02-17 01:05:43',
            ),
        ));
        
        $this->enableForeignKey(); 
    }
}