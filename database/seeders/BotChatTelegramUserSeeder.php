<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\BotChatTelegramUser;
use Illuminate\Database\Seeder;

class BotChatTelegramUserSeeder extends Seeder
{
    private const TABLE_SEED_COUNT = 1000;

    public function run(): void
    {
        BotChatTelegramUser::factory()->count(self::TABLE_SEED_COUNT)->create();
    }
}
