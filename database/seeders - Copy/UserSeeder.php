<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Traits\HasForeignKeys;
use App\Traits\TruncateTable;

class UserSeeder extends Seeder
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

        $this->truncate('users');

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'type' => User::ADMIN
        ]);

        User::factory()->create([
            'name' => 'Team Mod',
            'email' => 'moderator@example.com',
            'password' => bcrypt('password'),
            'type' => User::MODERATOR
        ]);

        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password'),
            'type' => User::DEFAULT
        ]);

        User::factory(5)->create();

        $this->enableForeignKey();    
    }
}
