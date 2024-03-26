<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
>>>>>>> bdb526c670e8a430c1ea45b0dcc8df81fc066926
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
<<<<<<< HEAD
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
=======
>>>>>>> bdb526c670e8a430c1ea45b0dcc8df81fc066926
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
<<<<<<< HEAD
            'password' => static::$password ??= Hash::make('password'),
=======
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
>>>>>>> bdb526c670e8a430c1ea45b0dcc8df81fc066926
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
<<<<<<< HEAD
=======
     *
     * @return $this
>>>>>>> bdb526c670e8a430c1ea45b0dcc8df81fc066926
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
