<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category')->nullable();
            $table->string('location')->nullable();
            $table->string('duration_label')->nullable();
            $table->unsignedSmallInteger('duration_days')->nullable();
            $table->unsignedSmallInteger('guests_min')->default(1);
            $table->unsignedSmallInteger('guests_max')->nullable();
            $table->decimal('price', 12, 2)->default(0);
            $table->decimal('old_price', 12, 2)->nullable();
            $table->string('currency', 10)->default('USD');
            $table->string('discount_badge')->nullable();
            $table->string('image')->nullable();
            $table->string('video_url')->nullable();
            $table->string('map_url')->nullable();
            $table->decimal('rating', 3, 1)->default(5.0);
            $table->unsignedInteger('reviews_count')->default(0);
            $table->string('accommodation')->nullable();
            $table->string('departure_city')->nullable();
            $table->string('arrival_city')->nullable();
            $table->string('best_season')->nullable();
            $table->string('guide_type')->nullable();
            $table->string('stay_category')->nullable();
            $table->text('overview')->nullable();
            $table->json('gallery')->nullable();
            $table->json('destinations')->nullable();
            $table->json('included')->nullable();
            $table->json('excluded')->nullable();
            $table->json('places')->nullable();
            $table->json('itinerary')->nullable();
            $table->json('faqs')->nullable();
            $table->json('duration_options')->nullable();
            $table->boolean('is_featured')->default(true);
            $table->boolean('is_published')->default(true);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
