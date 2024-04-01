<?php

namespace Database\Seeders;

use App\Traits\HasForeignKeys;
use Illuminate\Database\Seeder;

class TaggablesTableSeeder extends Seeder
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

        \DB::table('taggables')->delete();
        
        \DB::table('taggables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'taggable_type' => 'App\\Models\\Thread',
                'taggable_id' => 51,
                'tag_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'taggable_type' => 'App\\Models\\Thread',
                'taggable_id' => 51,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'taggable_type' => 'App\\Models\\Thread',
                'taggable_id' => 52,
                'tag_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'taggable_type' => 'App\\Models\\Thread',
                'taggable_id' => 52,
                'tag_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'taggable_type' => 'App\\Models\\Thread',
                'taggable_id' => 53,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'taggable_type' => 'App\\Models\\Thread',
                'taggable_id' => 54,
                'tag_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'taggable_type' => 'App\\Models\\Thread',
                'taggable_id' => 54,
                'tag_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'taggable_type' => 'App\\Models\\Thread',
                'taggable_id' => 54,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'taggable_type' => 'App\\Models\\Thread',
                'taggable_id' => 53,
                'tag_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        $this->enableForeignKey(); 
    }
}