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
    //one to many relation
            $table->foreignId('user_id')->after('id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //if i want to make drop to relation must make drop to relation in the first
            $table->dropForeign('user_id');
            $table->dropColumn(['user_id']);
        });
    }
};
