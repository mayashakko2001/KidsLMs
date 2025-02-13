<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_levels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('level_name');
            // $table->foreignId('level_id')->constrained('levels')->cascadeOnDelete();
          //  $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_levels');
    }
};
