<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table): void {
            $table->unsignedBigInteger('id');
            $table->foreignId('bot_chat_telegram_user_id')->constrained('bot_chat_telegram_user');
            $table->enum('type', ['text', 'image']);
            $table->json('data');
            $table->timestamp('date');
            $table->timestamp('created_at')->useCurrent();

            $table->primary(['bot_chat_telegram_user_id', 'id'], 'primary');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
