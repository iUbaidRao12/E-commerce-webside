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
            Schema::create('productimgs', function(Blueprint $table){
            $table->id();
            $table->UnsignedBigInteger('prod_id');
            $table->foreign('prod_id')->references('id')
            ->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->string('image');
            $table->timestamps();
});
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productimgs');
    }
};
