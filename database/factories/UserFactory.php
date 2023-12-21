<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // dd($this->faker->telefono);
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'telefono' => 65432922,
            'rol' => 1,
            'estatus' => 'ACTIVO',
            'password' => bcrypt('123456789'), // password
        ];
    }
}
