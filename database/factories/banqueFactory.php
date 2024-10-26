<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\Banque;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\banque>
 */
class banqueFactory extends Factory
{
    protected $model = \App\Models\Banque::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code_banque' => Str::random(8), // Generates a random 8-character string
            'name' => $this->faker->company,
        ];
    }
}
