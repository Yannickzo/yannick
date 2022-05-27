<?php

use App\Models\Produit;
use App\Models\Commande;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::dropIfExists('produitcommandes');
        Schema::create('produitcommandes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Produit::class)
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            $table->decimal('prix_unitaire')->default(0);
            $table->integer('quantity')->default(0);
            $table->foreignIdFor(Commande::class)
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();;
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
        Schema::dropIfExists('produitommandes');
    }
}
