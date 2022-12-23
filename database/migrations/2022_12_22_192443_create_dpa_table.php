<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('dpa', function (Blueprint $table) {
            $table->id();

            $table->string('dpa_provin');
            $table->string('dpa_despro');
            $table->string('dpa_canton');
            $table->string('dpa_descan');
            $table->string('dpa_parroq');
            $table->string('dpa_despar');
            $table->string('dpa_despar');
            $table->string('dpa_parurb');
            $table->string('dpa_desparurb');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dpa');
    }
};
