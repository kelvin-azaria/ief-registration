<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contestants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('campus_name');
            $table->string('campus_province');
            $table->string('campus_city');
            $table->string('ktp_province');
            $table->string('ktp_city');
            $table->text('residence_address');
            $table->string('phone');
            $table->date('birth_date');
            $table->string('instagram_video_url');
            $table->text('description');
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
        Schema::dropIfExists('contestants');
    }
}