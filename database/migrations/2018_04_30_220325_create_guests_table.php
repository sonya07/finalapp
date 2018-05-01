<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',60);
            $table->string('last_name',60);
            $table->string('address_1',100);
            $table->string('address_2',100)->nullable();
            $table->string('state',50);
            $table->string('city',50);
            $table->string('zip',10);
            $table->string('phone',100)->nullable();
            $table->string('fax',20)->nullable();
            $table->string('email',200)->nullable();
            $table->float('credit',8,2)->nullable();
            $table->integer('leg_custnum')->nullable();
            $table->string('leg_work_phone',12)->nullable();
            $table->string('leg_cell',12)->nullable();
            $table->date('leg_start_date')->nullable();
            $table->string('leg_checksum',32)->nullable();
            //$table->date('created_at');
            //$table->date('updated_at');
            $table->integer('guest_type')->nullable();
            $table->integer('mail_list')->nullable();
            $table->integer('email_list')->nullable();
            $table->date('dob')->nullable();
            $table->integer('does_exist')->nullable();
            $table->string('country',100)->nullable();
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
        Schema::dropIfExists('guest');
    }
}
