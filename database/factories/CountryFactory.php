<?php

namespace Lydenn\Punkhazard\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Lydenn\Punkhazard\Models\Country;

class CountryFactory extends Factory
{
    protected $model = Country::class;

    public function definition()
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->name(),
            'code' => fake()->name(),
        ];
    }
}
