<?php

use App\Models\Commande;
use App\Models\CompteLivreur;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivraisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livraisons', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CompteLivreur::class)
                    ->restrictOnDelete()
                    ->cascadeOnDelete();
            $table->foreignIdFor(Commande::class)
                    ->restrictOnDelete()
                    ->cascadeOnDelete();
            $table->enum('status',
            [
                'waiting',
                'pending',
                'done'
            ]);
            $table->boolean('isdone')->default(false);
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
        Schema::dropIfExists('livraisons');
    }
}
