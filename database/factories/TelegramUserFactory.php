<?php
declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TelegramUserFactory extends Factory
{
    private const BIG_INT_UNSIGNED_MAX = PHP_INT_MAX;

    public function definition(): array
    {
        $timestamp = $this->faker->dateTimeBetween('-1 year');

        return [
            'id' => rand(0, self::BIG_INT_UNSIGNED_MAX),
            'first_name' => $this->faker->text(255),
            'last_name' => $this->faker->text(255),
            'is_bot' => $this->faker->boolean,
            'username' => $this->faker->text(255),
            'language_code' => $this->faker->lexify('??'),
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
    }
}
