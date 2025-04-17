<?php
use MongoDB\Laravel\Schema\Blueprint; // ✅ correct namespace

use Illuminate\Database\Migrations\Migration;
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
        // Creating the MongoDB collection
        Schema::connection('mongodb')->create('volunteers', function (Blueprint $collection) {
            $collection->index('name'); // Example of adding an index
            $collection->string('name');
            $collection->string('email')->unique();
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
        // Dropping the collection
        Schema::connection('mongodb')->dropIfExists('volunteers');
    }
}
