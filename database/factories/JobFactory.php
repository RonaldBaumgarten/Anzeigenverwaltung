<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Company;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $fillable = ['title','company_id', 'category_id', 'description','requiredSkills','user_id'];
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'company_id' => Company::factory(),
            'category_id' => Category::factory(),
            'description' => $this->faker->text(),
            'requiredSkills' => $this->faker->text(),
            'user_id' => User::factory(),
        ];
    }
}
