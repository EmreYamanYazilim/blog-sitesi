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
        Schema::create('article_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("article_id");
            $table->unsignedBigInteger("parent_id")->nullable();
            $table->text("comment")->nullable();
            $table->tinyInteger("status")->default(0);
            $table->integer("like_count")->default(0);
            $table->integer("unlike_count")->default(0);
            $table->softDeletes(); // yorumlar kullanici silinme durumunda ne zaman silindiği gösterilmesi için  modelde Use yapmak gerek
            $table->timestamps();

            $table->foreign("user_id")
                ->references("id")
                ->on("article_comments");
            $table->foreign("article_id")
                ->references("id")
                ->on("articles");
            $table->foreign("parent_id")
                ->references("id")
                ->on("parents");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_comments');
    }
};
