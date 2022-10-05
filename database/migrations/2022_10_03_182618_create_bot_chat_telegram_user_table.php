<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bot_chat_telegram_user', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('telegram_user_id')->constrained();
            $table->foreignId('chat_id')->constrained();
            $table->unsignedInteger('bot_id');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bot_chat_telegram_user');
    }
};
