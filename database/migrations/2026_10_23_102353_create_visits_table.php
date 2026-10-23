<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->string('path', 500);
            $table->string('method', 10)->default('GET');
            $table->string('ip_address', 45)->nullable();
            $table->string('country')->nullable();
            $table->string('country_code', 8)->nullable();
            $table->string('city')->nullable();
            $table->string('region')->nullable();
            $table->string('referrer', 1000)->nullable();
            $table->string('user_agent', 500)->nullable();
            $table->string('session_id', 100)->nullable();
            $table->timestamps();

            $table->index('created_at');
            $table->index('country_code');
            $table->index('path');
            $table->index(['ip_address', 'path', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
