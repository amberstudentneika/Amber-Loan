<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('loanReqID')->unsigned();
            $table->foreign('loanReqID')->references('id')->on('loan_requests');
            $table->string('poi');
            $table->string('poa');
            $table->string('trnImg');
            $table->string('identification');
            $table->string('photo');
            $table->string('valid');
            $table->string('checkedBy');
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
        Schema::dropIfExists('documents');
    }
}
