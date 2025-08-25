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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string("mid")->nullable()->index();;
            $table->string('photo')->nullable(); // store file path
            $table->string('nid')->unique();
            $table->date('dob');
            $table->string("father_name");
            $table->string("mother_name");
            $table->string("village");
            $table->string("union_parishad");
            $table->string("upazila");
            $table->string("zila");
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->float("amount_of_tea_garden")->default(0);
            $table->string("tea_garden_address")->nullable();
            $table->string("dag_number")->nullable();
            $table->string("mouja_name")->nullable();
            $table->string("tea_board_registration_number")->nullable();
            $table->tinyInteger('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
