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
        Schema::create('products', function (Blueprint $table) {
        $table->id();

        $table->UnsignedBigInteger('cate_id');
        $table->foreign('cate_id')->references('id')
        ->on('categories')->onDelete('cascade')->onUpdate('cascade');
        $table->string('name');
        $table->text('description')->nullable();
        $table->decimal('price');
        $table->integer('piece');
     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
