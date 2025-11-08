<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('service_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();

            // feature section 
            $table->string('hero_title')->nullable();
            $table->string('hero_highlight_text')->nullable();
            $table->text('hero_subtitle')->nullable();
            $table->string('hero_button_text')->nullable();
            $table->string('hero_button_link')->nullable();
            $table->string('hero_video_url')->nullable();
            $table->string('hero_image')->nullable();

            $table->string('cards_title')->nullable();
            $table->string('cards_subtitle')->nullable();
            $table->text('cards_description')->nullable();
            $table->string('card1_image')->nullable();
            $table->string('card1_title')->nullable();
            $table->string('card1_highlight')->nullable();
            $table->string('card2_image')->nullable();
            $table->string('card2_title')->nullable();
            $table->string('card2_highlight')->nullable();
            $table->string('card3_image')->nullable();
            $table->string('card3_title')->nullable();
            $table->string('card3_highlight')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_pages');
    }
};
