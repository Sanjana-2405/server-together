<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint; // Correct import
use Illuminate\Support\Facades\Schema;

class CreateVolunteersCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mongodb')->create('volunteers', function (Blueprint $collection) {
            $collection->index('name');  // Add any indexes if needed
            $collection->string('name');
            $collection->string('email');
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mongodb')->dropIfExists('volunteers');
    }
}
