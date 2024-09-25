<?php

use App\Enums\TodoStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id")->nullable(false)->comment("ユーザID");

            $table->string("title", 512)->nullable(false)->comment("Todoタイトル");
            $table->boolean('completed')->default(TodoStatus::NOT_COMPLATED->value)->comment("完了フラグ");

            $table->timestamps();
            $table->softDeletes();
            $table->comment("Todo");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
