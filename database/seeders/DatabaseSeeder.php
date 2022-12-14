<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(ChatSeeder::class);
        $this->call(TelegramUserSeeder::class);
        $this->call(BotChatTelegramUserSeeder::class);
        $this->call(MessageSeeder::class);
    }
}
