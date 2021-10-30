<?php

namespace Database\Factories;

use App\Models\newSalesperson;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class newSalesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = newSalesperson::class;

    public function definition()
    {
        return [
                'full_name' => $this->faker->name(),
                'Email_address' => $this->faker->unique()->safeEmail(),
                'Teliphone' => now(),
                'joind_date' => $this->faker->date(),
                'Comments'=>Str::random(100),
                'remember_token' => Str::random(10),
        ];
    }
}
