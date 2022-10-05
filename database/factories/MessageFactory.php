<?php
declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    private const BIG_INT_UNSIGNED_MAX = PHP_INT_MAX;
    private const TYPE_VALUES = [
        'text', 'image',
    ];

    public function definition(): array
    {
        $timestamp = $this->faker->dateTimeBetween('-1 year');

        return [
            'id' => rand(0, self::BIG_INT_UNSIGNED_MAX),
            'bot_chat_telegram_user_id' => rand(0, self::BIG_INT_UNSIGNED_MAX),
            'type' => $this->faker->randomElement(self::TYPE_VALUES),
            'data' => json_encode(['text' => $this->faker->text(100)]),
            'date' => $timestamp,
            'created_at' => $timestamp,
        ];
    }
}
