<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('letters', function (Blueprint $table) {
            $table->string('sign_name')->nullable();
            $table->string('sign_position')->nullable();
            $table->string('sign_id')->nullable();
            $table->string('sign_rank')->nullable();
            $table->string('explain_name')->nullable();
            $table->string('explain_place_and_date_of_birth')->nullable();
            $table->string('explain_religion')->nullable();
            $table->string('explain_job')->nullable();
            $table->string('explain_nik')->nullable();
            $table->string('explain_address')->nullable();
            $table->string('explain_martial_status')->nullable();
            $table->string('explain_country')->default('Indonesia');
            $table->string('invitation_characteristic')->nullable();
            $table->string('invitation_to')->nullable();
            $table->string('invitation_apendix')->nullable();
            $table->string('invitation_opening')->nullable();
            $table->string('invitation_day')->nullable();
            $table->string('invitation_date')->nullable();
            $table->string('invitation_time')->nullable();
            $table->string('invitation_place')->nullable();
            $table->string('invitation_note')->nullable();
            $table->string('invitation_closing')->nullable();
            $table->string('copy_of_leter')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('letters', function (Blueprint $table) {
            $table->dropColumn('sign_name');
            $table->dropColumn('sign_position');
            $table->dropColumn('sign_id');
            $table->dropColumn('sign_rank');
            $table->dropColumn('explain_name');
            $table->dropColumn('explain_place_and_date_of_birth');
            $table->dropColumn('explain_religion');
            $table->dropColumn('explain_job');
            $table->dropColumn('explain_nik');
            $table->dropColumn('explain_address');
            $table->dropColumn('explain_martial_status');
            $table->dropColumn('explain_country');
            $table->dropColumn('explain_description');
            $table->dropColumn('invitation_characteristic');
            $table->dropColumn('invitation_to');
            $table->dropColumn('invitation_apendix');
            $table->dropColumn('invitation_opening');
            $table->dropColumn('invitation_day');
            $table->dropColumn('invitation_date');
            $table->dropColumn('invitation_time');
            $table->dropColumn('invitation_place');
            $table->dropColumn('invitation_note');
            $table->dropColumn('invitation_closing');
            $table->dropColumn('copy_of_leter');
        });
    }
};
