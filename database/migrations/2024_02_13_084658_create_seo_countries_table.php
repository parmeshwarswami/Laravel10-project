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
        Schema::create('seo_countries', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->string('name');
            $table->string('region_code');
            $table->string('region_name');

            $table->string('url_slug')->unique();
            $table->boolean('active')->default(false);
            $table->boolean('og_tc_same_to_meta')->default(false);
            $table->string('logo_url')->nullable();
            $table->string('logo_alt_text')->nullable();

            $table->longText('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->longText('meta_keywords')->nullable();
            $table->longText('og_tc_title')->nullable();
            $table->longText('og_tc_description')->nullable();
            $table->longText('head_scripts')->nullable();
            $table->longText('body_scripts')->nullable();
            $table->longText('body')->nullable();
            $table->json('faqs')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_countries');
    }
};
