<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFurnizimetPijesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('furnizimet_pije', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('furnitor_id');
            $table->double('total', 8, 2);	
            $table->date('date');	
            $table->text('notes')->nullable();		

            $table->foreign('furnitor_id')->references('id')->on('furnitoret')->onDelete('cascade');
            $table->timestamps();
        });
        
        Schema::create('furnizimet_pije_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('furnizim_id');
            $table->unsignedBigInteger('pije_id');
            $table->integer('qty');
            $table->double('amount', 8, 2);

            $table->timestamps();
	
            $table->foreign('furnizim_id')->references('id')->on('furnizimet_pije')->onDelete('cascade');
            $table->foreign('pije_id')->references('id')->on('pijet')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('furnizimet_pije_items');
        Schema::dropIfExists('furnizimet_pije');
    }
}
