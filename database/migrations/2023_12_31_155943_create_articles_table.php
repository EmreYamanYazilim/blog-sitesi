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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("category_id");
            $table->string("image")->nullable();
            $table->string("name", 70);
            $table->string("slug",140);
            $table->string("body");
            $table->string("tags")->nullable();
            $table->boolean("status")->default(0);
            $table->string("seo_description")->nullable();
            $table->string("seo_keywords")->nullable();
            $table->integer("read_time")->default(0); // saniye cinsindne tutucağım
            $table->integer("like_count")->default(0);
            $table->integer("view_count")->default(0);
            $table->dateTime("publish_date");
            $table->timestamps();

            $table->foreign("category_id")
                ->references("id")
                ->on("categories")
                ->onDelete("cascade");
            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
