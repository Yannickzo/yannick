<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class CreateCompteFournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string("numeroIfu");
            $table->string("numeroRccm");
            $table->enum('domaine',[
                'Informel',
                'As',
                'Sa'
            ]);
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
        Schema::dropIfExists('compte_fournisseurs');
    }
}
