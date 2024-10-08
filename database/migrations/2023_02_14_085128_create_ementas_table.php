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
        Schema::create('ementas', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->string('sopa');
            $table->string('pratocarne');
            $table->string('pratopeixe');
            $table->string('pratovegetariano');
            $table->string('sobremesa');
            $table->string('fruta');
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
        Schema::dropIfExists('ementas');
    }
};
