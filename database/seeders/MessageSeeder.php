<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    private const TABLE_SEED_COUNT = 10000;

    public function run(): void
    {
        Message::factory()->count(self::TABLE_SEED_COUNT)->create();
    }
}
