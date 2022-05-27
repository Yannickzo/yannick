<?php

use App\Models\CompteFournisseur;
use App\Models\CompteLivreur;
use App\Models\TypeClient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nom_client');
            $table->string('prenom_client');
            $table->string('numero_doc_identification');
            $table->date('date_cnib');
            $table->date('date_naissance');
            $table->enum('user_type',[
                "client",
                "agent",
                'livreur',
                "fournisseur"
            ]);
            $table->foreignIdFor(TypeClient::class)->nullable();
            $table->boolean("isActive")->default(false);
            $table->rememberToken();
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
        // Schema::dropIfExists('users');
    }
}
