<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimekeepingRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timekeeping_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employess_id')->index();
            $table->date('clockin')->index();
            $table->date('clockout')->index();
            $table->date('total');
            $table->unsignedBigInteger('timekeeping_id')->index();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('employess_id')->references('id')->on('employees');
            $table->foreign('timekeeping_id')->references('id')->on('timekeeping');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timekeeping_records');
    }
}
