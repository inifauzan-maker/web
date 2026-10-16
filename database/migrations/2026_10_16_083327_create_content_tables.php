<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('page_contents', function (Blueprint $table): void {
            $table->id();
            $table->string('key')->unique();
            $table->string('label');
            $table->string('heading')->nullable();
            $table->text('intro')->nullable();
            $table->longText('body')->nullable();
            $table->string('meta_title', 160);
            $table->string('meta_description', 320);
            $table->string('image');
            $table->boolean('is_indexable')->default(true);
            $table->timestamps();
        });
        Schema::create('articles', function (Blueprint $table): void {
            $table->id();
            $table->string('title');
            $table->string('slug', 180)->unique();
            $table->string('category', 80);
            $table->text('excerpt');
            $table->text('summary')->nullable();
            $table->longText('body');
            $table->text('key_points')->nullable();
            $table->json('faqs')->nullable();
            $table->json('sources')->nullable();
            $table->string('author_name', 120);
            $table->string('image');
            $table->string('image_alt');
            $table->string('meta_title', 160)->nullable();
            $table->string('meta_description', 320)->nullable();
            $table->boolean('is_indexable')->default(true);
            $table->string('status')->default('draft');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->index(['status', 'published_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
        Schema::dropIfExists('page_contents');
    }
};
