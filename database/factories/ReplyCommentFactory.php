<?php

namespace Database\Factories;

use App\Models\ReplyComment;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReplyCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ReplyComment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment_id' => rand(1,10),
            'title' => $this->faker->paragraph(1),
            'body' => $this->faker->paragraph(5),
        ];
    }
}
