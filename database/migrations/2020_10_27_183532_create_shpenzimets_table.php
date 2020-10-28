<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShpenzimetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shpenzimet', function (Blueprint $table) {
            $table->id();
            $table->string('type', 100);
            $table->double('amount', 8, 2);	
            $table->date('date');	
            $table->text('notes')->nullable();		

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
        Schema::dropIfExists('shpenzimet');
    }
}
