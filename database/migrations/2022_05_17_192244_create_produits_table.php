<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use App\Models\SousCategory;
use phpDocumentor\Reflection\Types\Nullable;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('produits');
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(SousCategory::class)
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->float('prix')->default(0);
            $table->float('prix_promo')->nullable();
            $table->text('description')->nullable();
            $table->string('image');
            $table->json('galery_image')->nullable();
            $table->date('debut_promo')->nullable();
            $table->date('fin_promo')->nullable();
            $table->string('slug')->unique();
            $table->string('tags')->nullable();
            $table->boolean('isPacking')->default(false);
            $table->float('evaluation_moyenne')->default(0);
            $table->integer('nombre_evaluation')->default(0);
            $table->boolean('isActive')->default(false);
            $table->float('quantity')->default(0);
            $table->float('quantity_alert')->default(0);
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
        Schema::dropIfExists('produits');
    }
}
