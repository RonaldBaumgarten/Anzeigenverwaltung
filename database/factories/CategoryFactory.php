<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kategorien = [
            'IT', 'Verwaltung', 'Produktion', 'Beratung', 'Buchhaltung', 
            'Vertrib', 'Verkauf', 'Marketing', 'Bauwesen', 'Administration',
            'Logistik', 'Ingenieurwesen', 'Gastronomie', 'Soziales', 'Immobilien'
        ];

        return [
            'catName' => $this->faker->randomElement($kategorien),
        ];
    }
}
