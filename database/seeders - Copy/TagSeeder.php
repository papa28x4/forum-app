<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use App\Traits\HasForeignKeys;
use App\Traits\TruncateTable;

class TagSeeder extends Seeder
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

        $this->truncate('tags');

        Tag::factory(4)->create();

        $this->enableForeignKey();
    }
}
