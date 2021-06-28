<?php

namespace Database\Factories;

use App\Models\Stubby;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StubbyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stubby::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::orderByRaw('RAND()')->first()->id,
            'stubby_name' => $this->faker->word,
            'is_active' => true,
            'short_url' => "stubbyapp.com/{$this->faker->word}",
            'long_url' => $this->faker->url(),
        ];
    }
}
