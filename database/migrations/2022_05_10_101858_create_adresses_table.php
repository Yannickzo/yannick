<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            $table->boolean('only_delivery')->default(false);
            $table->string('region');
            $table->string('ville');
            $table->string('quartier');
            $table->string('telephone');
            $table->string('whatsapp');
            // Todo : add field for geodata
            // $table->decimal('latitude')->nullable();
            // $table->decimal('longitude')->nullable();
            $table->string('personne_a_prevenir');
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
        Schema::dropIfExists('adresses');
    }
}
