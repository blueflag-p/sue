<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger("employee_id")->nullable();
            $table->string('system_role');
            $table->string('title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('location');
            $table->string('main_location')->nullable();
            $table->string('driver')->nullable();
            $table->string('fire_marshal')->nullable();
            $table->string('first_aider')->nullable();
            $table->string('job_title')->nullable();
            $table->string('holiday_type');
            $table->string('status')->nullable();
            $table->string('position')->nullable();
            $table->string('agree_with_holiday')->nullable();
            $table->string('email');
            $table->string('mobile')->nullable();
            $table->date('start_date')->nullable();
            $table->string('landline')->nullable();
            $table->string('image');
            $table->string('is_image_correct')->nullable();
            $table->string('medical_alert')->nullable();
            $table->timestamps();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
