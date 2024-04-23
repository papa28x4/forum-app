<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(TagSeeder::class);
        // $this->call(ThreadSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ThreadsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(TaggablesTableSeeder::class);
        $this->call(RepliesTableSeeder::class);
        $this->call(LikesTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class);
        $this->call(FollowsTableSeeder::class);
        $this->call(ViewsTableSeeder::class);
    }
}
