<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFurnizetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('furnizimet', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('furnitor_id');
            $table->string('type', 100);
            $table->double('amount', 8, 2);	
            $table->date('date');	
            $table->text('notes')->nullable();		

            $table->foreign('furnitor_id')->references('id')->on('furnitoret')->onDelete('cascade');
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
        Schema::dropIfExists('furnizimet');
    }
}
