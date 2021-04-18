<?php

namespace Database\Factories;

use App\Models\Empyajra;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpyajraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empyajra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'salary' => $this->faker->numberBetween(30000, 50000),
            'department' => $this->faker->randonElement(array('Accounting', 'Marketing', 'physics', 'chemistry', 'Mathematics')),
        ];
    }
}
