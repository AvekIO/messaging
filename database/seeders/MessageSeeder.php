<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\BotChatTelegramUser;
use App\Models\Message;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    private const TABLE_SEED_COUNT = 1000;

    public function run(): void
    {
        $botChatTelegramUsers = BotChatTelegramUser::all();

        for ($i = 0; $i < self::TABLE_SEED_COUNT; $i++) {
            Message::factory()->create([
                'bot_chat_telegram_user_id' => $botChatTelegramUsers->random()->id,
            ]);
        }
    }
}
