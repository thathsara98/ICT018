<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regforms', function (Blueprint $table) {
            //$table->incremented('id');
            $table->string('name');
            $table->string('dateOfBirth');
            $table->string('telephoneNo');
            $table->string('NIC');
            $table->string('gender');

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
        Schema::dropIfExists('regforms');
    }
}
