<?php

namespace Database\Factories;

use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' => $this->faker->paragraph(),
            'author_id' => $attributes['author_id'] ?? User::factory(),
            'replyable_id' => $attributes['replyable_id'] ?? Thread::factory(),
            'replyable_type' => Thread::TABLE,
        ];
    }
}
