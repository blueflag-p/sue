<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->string('system_role');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('company')->nullable();
            $table->string('email');
            $table->string('mobile');
            $table->string('landline')->nullable();
            $table->string('dbs');
            $table->string('image');
            $table->string('is_image_correct');
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
        Schema::dropIfExists('owner');
    }
}
