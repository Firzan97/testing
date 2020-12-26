<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->string('admin_code');
            $table->string('admin_password');
            $table->string('admin_name');
            $table->integer('admin_phoneNum');
            $table->string('admin_email');
            $table->string('admin_address');
            $table->integer('admin_postcode');
            $table->string('admin_city');
            $table->string('admin_state');
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
        Schema::dropIfExists('admin');
    }
}
