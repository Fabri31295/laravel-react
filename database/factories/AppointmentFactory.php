<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $faker->randomDigitNotNull,
            'date' => $faker->text($maxNbChars = 10),
            'hour' => $faker->text($maxNbChars = 10),
            'cancelled' => $faker->boolval,
        ];
    }
}
