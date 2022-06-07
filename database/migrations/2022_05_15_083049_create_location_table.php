<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->increments('id');
            $table->string('house_no')->nullable();
            $table->string('registeration_number')->nullable();
            $table->string('address');
            $table->string('town');
            $table->string('postcode');
            $table->string('landline')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('region')->nullable();
            $table->string('image');
            $table->string('child_gender_preference');
            $table->string('staff_gender_preference');
            $table->string('agent_name')->nullable();
            $table->string('agent_address')->nullable();
            $table->string('agent_town')->nullable();
            $table->string('agent_postcode')->nullable();
            $table->string('agent_landline')->nullable();
            $table->string('agent_email')->nullable();
            $table->string('landlord_name')->nullable();
            $table->string('landlord_address')->nullable();
            $table->string('landlord_town')->nullable();
            $table->string('landlord_postcode')->nullable();
            $table->string('landlord_landline')->nullable();
            $table->string('landlord_email')->nullable();
            $table->string('head_location')->nullable();
            $table->string('tv_cost')->nullable();
            $table->string('tv_plan')->nullable();
            $table->date('tv_expirey_date')->nullable();
            $table->string('no_of_aims');
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
        Schema::dropIfExists('location');
    }
}
