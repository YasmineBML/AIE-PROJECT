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
            'date_de_naissence'=> $this->faker->word(),
            'email' => $this->faker->word(),
            'mot_de_passe' => $this->faker->word(),
            'grade' => $this->faker->name(),
            'type' => $this->faker->name(),


           
        ];
    }
}
