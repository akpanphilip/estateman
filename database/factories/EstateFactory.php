<?php

namespace Database\Factories;

use App\Models\Developer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EstateFactory extends Factory
{
    public function definition(): array
    {
        $name = $this->faker->words(3, true) . ' Estate';
        return [
            'developer_id' => Developer::inRandomOrder()->first()->id,
            'name'         => $name,
            'slug'         => Str::slug($name),
            'location'     => $this->faker->city() . ', ' . $this->faker->state(),
            'description'  => $this->faker->paragraph(),
            'is_active'    => true,
        ];
    }
}
