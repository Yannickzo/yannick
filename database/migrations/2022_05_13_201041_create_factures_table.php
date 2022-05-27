<?php

use App\Models\Commande;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('factures', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        //     $table->foreignIdFor(User::class)
        //     ->cascadeOnDelete()
        //     ->cascadeOnUpdate();
        //     $table->foreignIdFor(Commande::class)
        //     ->cascadeOnDelete()
        //     ->cascadeOnUpdate();
        //     $table->float("montant_net");
        //     $table->date('date_facture');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factures');
    }
}
