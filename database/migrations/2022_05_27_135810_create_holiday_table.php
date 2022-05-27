<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holiday', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('destinazione');
            $table->decimal('costo', 8, 2);
            $table->date('data_di_partenza');
            $table->date('data_di_ritorno');
            $table->string('tipo');
            $table->string('tipo_di_pensione');
            $table->boolean('tassa_di_soggiorno');
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
        Schema::dropIfExists('holiday');
    }
}
