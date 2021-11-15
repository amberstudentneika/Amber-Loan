<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_infos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('loanReqID')->unsigned();
            $table->foreign('loanReqID')->references('id')->on('loan_requests');
            $table->integer('repayPeriod');
            $table->float('intRate',10,2);
            $table->float('loanAmt');
            $table->float('monthPay');
            $table->float('totalRepAmt');
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
        Schema::dropIfExists('loan_infos');
    }
}
