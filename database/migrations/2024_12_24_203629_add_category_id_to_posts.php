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
        Schema::table('posts', function (Blueprint $table) {
            //
            //外部鍵
            // $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->after('title')->nullable()->constrained()->nullOnDelete();
            // $table->foreignId('category_id')->constrained()->restrictOnDelete();
            // $table->foreignId('category_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
};

// 每一篇文章 只有一個分類
// 每一個分類 會對應多個文章
