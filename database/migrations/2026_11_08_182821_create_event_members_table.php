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
        Schema::create('event_members', function (Blueprint $table) {
            $table->id();
            // Personal Information
            $table->string('name', 150);

            // Photo
            $table->string('photo')->nullable();

            // Phone Number
            $table->string('phone', 20)->index();

            // Address
            $table->text('address')->nullable();

            // Bkash Code
            $table->string('bkash_code', 100)->nullable();

            // Shirt Size
            $table->enum('shirt_size', [
                'L',
                'M',
                'XL',
                'XXL'
            ]);
            $table->tinyInteger('status')->default('0')->comment('Indicates the current status of the Member (e.g., 1->active, 0->pending)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_members');
    }
};
