<?php
declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChatFactory extends Factory
{
    private const BIG_INT_UNSIGNED_MAX = PHP_INT_MAX;
    private const TYPE_VALUES = [
        'private', 'group', 'supergroup', 'channel',
    ];

    public function definition(): array
    {
        $timestamp = $this->faker->dateTimeBetween('-1 year');

        return [
            'id' => rand(0, self::BIG_INT_UNSIGNED_MAX),
            'first_name' => $this->faker->text(255),
            'last_name' => $this->faker->text(255),
            'username' => $this->faker->text(255),
            'type' => $this->faker->randomElement(self::TYPE_VALUES),
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
    }
}
