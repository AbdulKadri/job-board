<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $tags = [ 'remote', 'full-time', 'contract', 'frontend', 'backend', 'design', 'php', 'mysql', 'laravel', 'fast-paced', 'sales', 'manager', 'director', 'heavy-lifting'];
        $randomTags = $this->faker->randomElements($tags, 3);

        return [
            'title' => $this->faker->jobTitle(),
            'tags' => implode(', ', $randomTags),
            'company' => $this->faker->company(),
            'location' => $this->faker->city(),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'description' => $this->faker->realText(200),
        ];
    }
}
