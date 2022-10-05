<?php
declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BotChatTelegramUserFactory extends Factory
{
    private const INT_UNSIGNED_MAX = 4294967295;
    private const BIG_INT_UNSIGNED_MAX = PHP_INT_MAX;

    public function definition(): array
    {
        return [
            'id' => rand(0, self::BIG_INT_UNSIGNED_MAX),
            'telegram_user_id' => rand(0, self::BIG_INT_UNSIGNED_MAX),
            'chat_id' => rand(0, self::BIG_INT_UNSIGNED_MAX),
            'bot_id' => rand(0, self::INT_UNSIGNED_MAX),
            'created_at' => $this->faker->dateTimeBetween('-1 year'),
        ];
    }
}
