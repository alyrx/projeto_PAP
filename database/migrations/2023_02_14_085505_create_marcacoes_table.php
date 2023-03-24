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
        Schema::create('marcacaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('ementa_id');
            $table->enum('prato', ['C', 'P', 'V']);
            $table->enum('sobremesa', ['S', 'F']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcacaos');
    }
};
