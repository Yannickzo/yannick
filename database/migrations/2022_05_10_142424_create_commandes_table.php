<?php

use App\Models\Adresse;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->enum('status',[
                "receive",
                "pending",
                "canceled",
                "done"
            ]);
            $table->boolean('isdeliver');
            $table->enum('paiement',[
                'carte',
                'orange',
                'reception'
            ]);
            $table->string('numero_commande');
            $table->float('prime_distance')->default(0);
            $table->float('prime_fragilite')->default(0);
            $table->timestamps();
            $table->foreignIdFor(Adresse::class)
                    ->cascadeOnDelete()
                    ->cascadeOnDelete();
            $table->foreignIdFor(User::class)
            ->cascadeOnDelete()
            ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
