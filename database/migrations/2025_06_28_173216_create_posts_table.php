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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title",255)->nullable();
            $table->timestamps();//created_at and updated_at
            //$tabel->boolean('check')->default(0);
            $table->integer("views")->nullable();
            $table->enum("status",['active','notactive'])->default('notactive');
            $table->text("content")->nullable();
            $table->dateTime("create_at");

            // $table->foreignId('user_id')->constrained();
            // $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('user_id')->constrained('users');//the same

            // $table->unsignedInteger('user_id');//is wrong state
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
