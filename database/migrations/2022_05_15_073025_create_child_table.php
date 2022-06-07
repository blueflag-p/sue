<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->date('dob');
            $table->string('gender');
            $table->string('address_type');
            $table->string('placement_address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('religion')->nullable();
            $table->string('national_insurance')->nullable();
            $table->string('kin')->nullable();
            $table->string('allergy')->nullable();
            $table->string('school')->nullable();
            $table->string('school_address')->nullable();
            $table->string('school_tel')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('height')->nullable();
            $table->string('build')->nullable();
            $table->string('distinguish_features')->nullable();
            $table->string('education_type')->nullable();
            $table->string('placing_Authority')->nullable();
            $table->string('complexion')->nullable();
            $table->string('parental_responsibilty')->nullable();
            $table->string('form_communication')->nullable();
            $table->string('previos_name')->nullable();
            $table->string('gp_details')->nullable();
            $table->string('key_worker')->nullable();
            $table->string('child_employer')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('address')->nullable();
            $table->string('tel_no')->nullable();
            $table->string('image')->nullable();
            $table->string('image_check')->nullable();
            $table->date('Admission_date');
            $table->date('discharge_date')->nullable();
            $table->date('Lac_review_date')->nullable();
            $table->date('lac_review_next_date')->nullable();
            $table->string('comments')->nullable();
            $table->string('special_dietart_reqirements')->nullable();
            $table->string('local_authority')->nullable();
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
        Schema::dropIfExists('child');
    }
}
