<?php

namespace Database\Factories;

use App\Models\Estate;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PrototypeFactory extends Factory
{
    public function definition(): array
    {
        $name = $this->faker->words(3, true) . ' Prototype';
        return [
            'estate_id'        => Estate::inRandomOrder()->first()->id,
            'name'             => $name,
            'slug'             => Str::slug($name),
            'description'      => $this->faker->paragraph(),
            'price'            => $this->faker->numberBetween(5000000, 50000000),
            'plot_size'        => $this->faker->randomElement(['300 sqm', '450 sqm', '600 sqm', '750 sqm', '1 acre']),
            'description' => $this->faker->paragraph(),
            'category'         => $this->faker->randomElement(['regular', 'featured', 'new_listing']),
            'phone_number'     => $this->faker->phoneNumber(),
            'whatsapp_number'  => $this->faker->phoneNumber(),
            'facebook_link'    => 'https://facebook.com/' . $this->faker->slug(),
            'instagram_link'   => 'https://instagram.com/' . $this->faker->slug(),
            'is_active'        => true,
        ];
    }
}
