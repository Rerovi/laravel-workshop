<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Project::class;
    public function definition()
    {
        return [
            'name' =>$this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'description' =>$this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'created_at' => $this->faker->dateTimeThisDecade('now', 'europe/amsterdam'),
            'updated_at' => $this->faker->dateTimeThisDecade('now', 'europe/amsterdam')

        ];
    }
}
