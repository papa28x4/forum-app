<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Traits\HasForeignKeys;
use App\Traits\TruncateTable;
use Illuminate\Support\Str;

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
            'slug' => Str::slug('Admin'),
            'password' => bcrypt('12345678'),
            'type' => User::ADMIN
        ]);

        User::factory()->create([
            'name' => 'Team Mod',
            'email' => 'moderator@example.com',
            'slug' => Str::slug('Team Mod'),
            'password' => bcrypt('12345678'),
            'type' => User::MODERATOR
        ]);

        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'slug' => Str::slug('John Doe'),
            'password' => bcrypt('12345678'),
            'type' => User::DEFAULT
        ]);

        User::factory(5)->create();

        $this->enableForeignKey();    
    }
}
