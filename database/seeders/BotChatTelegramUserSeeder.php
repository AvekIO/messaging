<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\BotChatTelegramUser;
use App\Models\Chat;
use App\Models\TelegramUser;
use Illuminate\Database\Seeder;

class BotChatTelegramUserSeeder extends Seeder
{
    private const TABLE_SEED_COUNT = 1000;

    public function run(): void
    {
        $chats = Chat::all();
        $telegramUsers = TelegramUser::all();

        for ($i = 0; $i < self::TABLE_SEED_COUNT; $i++) {
            BotChatTelegramUser::factory()->create([
                'chat_id' => $chats->random()->id,
                'telegram_user_id' => $telegramUsers->random()->id,
            ]);
        }
    }
}
