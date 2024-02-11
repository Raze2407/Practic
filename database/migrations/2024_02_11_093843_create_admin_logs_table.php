<?php

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
        Schema::create('admin_logs', function (Blueprint $table) {
            $table->id('LogID');
            $table->unsignedBigInteger('AdminID');
            $table->foreign('AdminID')->references('UserId')->on('users');
            $table->enum('Action', ['Добавление', 'Редактирование', 'Блокировка', 'Разблокировка']);
            $table->unsignedBigInteger('TargetUserID')->nullable();
            $table->foreign('TargetUserID')->references('UserId')->on('users');
            $table->unsignedBigInteger('TargetAdID')->nullable();
            $table->foreign('TargetAdID')->references('AdID')->on('advertisements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_logs');
    }
};
