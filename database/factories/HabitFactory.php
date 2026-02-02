<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habit>
 */
class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        $habits = [
            'Academia',
            'Meditar',
            'Ler',
            'Escrever',
            'Programar',
            'Fazer exercícios',
            'Fazer yoga',
            'Fazer meditação',
            'Fazer mindfulness',
        ];
        
        return [
            'user_id' => 1,
            'name' => $this->faker->unique()->randomElement($habits),
        ];
    }
}
