<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_requests', function (Blueprint $table) {
            $table->id();
            $table->string('trn')->unique();
            $table->string('fName');
            $table->string('lName');
            $table->string('gender');
            $table->string('homeAddress');
            $table->string('email')->unique();
            $table->string('phoneNum');
            $table->float('amount',10,2);
            $table->string('status');
            $table->string('comments');
            $table->string('loanOfficer');
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
        Schema::dropIfExists('loan_requests');
    }
}
