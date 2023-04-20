<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('user_name'); // 社長名を保存するカラム
            $table->string('company_name'); // 会社名を保存するカラム
            $table->unsignedBigInteger('user_id')->nullable(); // usersテーブルのidカラムを参照する外部キー
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('set null');
            $table->index('user_name');
            $table->index('company_name');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
