<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Country::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->word,
        'name' => $this->faker->word,
        'phone' => $this->faker->randomDigitNotNull,
        'symbol' => $this->faker->word,
        'capital' => $this->faker->word,
        'currency' => $this->faker->word,
        'continent' => $this->faker->word,
        'continent_code' => $this->faker->word,
        'alpha_3' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_by' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
