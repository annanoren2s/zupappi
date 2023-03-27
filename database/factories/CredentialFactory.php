<?php

namespace Database\Factories;

use App\Models\Credential;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CredentialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Credential::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->email,
            'password' => $this->faker->password,
            '2fa_code' => $this->faker->text(255),
            'is_read_by' => \App\Models\User::factory(),
        ];
    }
}
