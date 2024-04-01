<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Traits\HasForeignKeys;
use App\Traits\TruncateTable;

class CategorySeeder extends Seeder
{
    use TruncateTable, HasForeignKeys; 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKey();

        $this->truncate('categories');

        Category::factory(7)->create();

        $this->enableForeignKey();   
    }
}
