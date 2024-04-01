<?php

namespace Database\Seeders;

use App\Traits\HasForeignKeys;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
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

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Laravel',
                'slug' => 'laravel',
                'created_at' => '2024-02-17 01:05:44',
                'updated_at' => '2024-02-17 01:05:44',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Javascript',
                'slug' => 'javascript',
                'created_at' => '2024-02-17 01:05:44',
                'updated_at' => '2024-02-17 01:05:44',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Livewire',
                'slug' => 'livewire',
                'created_at' => '2024-02-17 01:05:44',
                'updated_at' => '2024-02-17 01:05:44',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'PHP',
                'slug' => 'php',
                'created_at' => '2024-02-17 01:05:45',
                'updated_at' => '2024-02-17 01:05:45',
            ),
        ));
        
        $this->enableForeignKey(); 
    }
}