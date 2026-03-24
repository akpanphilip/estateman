<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DeveloperFactory extends Factory
{
    public function definition(): array
    {
        $name = $this->faker->company();
        return [
            'name'        => $name,
            'slug'        => Str::slug($name),
            'description' => $this->faker->paragraph(),
            'is_active'   => true,
        ];
    }
}
