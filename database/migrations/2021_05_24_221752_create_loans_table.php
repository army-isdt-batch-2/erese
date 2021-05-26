<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employees_id')->index();
            $table->string('full_name')->index();
            $table->string('designation')->index();
            $table->enum('loans_type', [
                'homeloan', 'carloan'
            ])->index();
            $table->integer('loan_amount')->index();
            $table->date('months_payable')->index();
            $table->longText('notes')->index();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('employees_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
    }
}
