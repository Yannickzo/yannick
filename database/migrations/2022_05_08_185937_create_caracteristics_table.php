<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateCaracteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristics', function (Blueprint $table) {
            $table->id();
            $table->string('color')->nullable();
            $table->float('weight')->Nullable();
            $table->float('largeur')->nullable();
            $table->float('longeur')->nullable();
            $table->float('hauteur')->nullable();
            $table->json('autre')->nullable();
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
        Schema::dropIfExists('caracteristics');
    }
}
