<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayslipRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payslip_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employees_id')->index();
            $table->unsignedBigInteger('payslip_id')->index();
            $table->longText('data')->nullable()->default('text');
            $table->timestamps();

            $table->foreign('employees_id')->references('id')->on('employees');
            $table->foreign('payslip_id')->references('id')->on('payslip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payslip_records');
    }
}
