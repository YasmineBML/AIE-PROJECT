<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enseignant>
 */
class EnseignantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //

            'nom' => $this->faker->name(),
            'prenom' => $this->faker->name(),
            'email' => $this->faker->word(),
            'motdepasse' => $this->faker->word(),
            'type' => $this->faker->name(),
            'grade' => $this->faker->name(),
        

        ];
    }
}
