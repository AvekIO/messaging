<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\TelegramUser;
use Illuminate\Database\Seeder;

class TelegramUserSeeder extends Seeder
{
    private const TABLE_SEED_COUNT = 1000;

    public function run(): void
    {
        TelegramUser::factory()->count(self::TABLE_SEED_COUNT)->create();
    }
}
