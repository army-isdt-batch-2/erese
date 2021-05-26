<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->binary('photo')->index();
            $table->string('employees_id')->index();
            $table->string('first_name')->index();
            $table->string('last_name')->index();
            $table->string('middle_name')->index();
            $table->string('contact')->index();
            $table->date('birthday')->index();
            $table->enum('gender', [
                'Male', 'Female'
            ])->index();
          
            $table->unsignedBigInteger('department_id')->index();
            $table->string('designation')->index();
            $table->integer('basic_rate_perday')->index();
            $table->unsignedBigInteger('sss')->index();
            $table->unsignedBigInteger('philhealth')->index();
            $table->unsignedBigInteger('pagibig')->index();
            $table->unsignedBigInteger('tax')->index();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('department_id')->references('id')->on('department');
            $table->foreign('sss')->references('id')->on('deductions');
            $table->foreign('philhealth')->references('id')->on('deductions');
            $table->foreign('pagibig')->references('id')->on('deductions');
            $table->foreign('tax')->references('id')->on('deductions');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
