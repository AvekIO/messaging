<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Chat;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    private const TABLE_SEED_COUNT = 1000;

    public function run(): void
    {
        Chat::factory()->count(self::TABLE_SEED_COUNT)->create();
    }
}
