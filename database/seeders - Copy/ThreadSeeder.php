<?php

namespace Database\Seeders;

use App\Models\Thread;
use Illuminate\Database\Seeder;
use App\Traits\HasForeignKeys;
use App\Traits\TruncateTable;

class ThreadSeeder extends Seeder
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

        $this->truncate('threads');

        Thread::factory(50)->create();
        
        $this->enableForeignKey(); 
    }
}
