<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class CreateCompteLivreursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_livreurs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();
            $table->string("marqueEngin");
            $table->string("etatEngin");
            $table->string("numeroEngin");
            $table->boolean("isonline");
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
        Schema::dropIfExists('compte_livreurs');
    }
}
