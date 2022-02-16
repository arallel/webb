<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Driverprofil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver', function (Blueprint $table) {
            $table->increments('id');
           $table->char('no_ktp')->unique();
            $table->string('file');
            // $table->char('uid');
            $table->char('sebelumspeed');
            $table->char('sesudahspeed');
            // $table->string('name');
            // $table->string('gender');
            // $table->string('tempat_lahir');
            // $table->date('tanggal_lahir');
            // $table->string('provinsi');
            // $table->string('kabupaten');
            // $table->string('kecamatan');
            // $table->string('alamat');
            // $table->string('email')->unique();
            // $table->string('role')->default(0);
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->string('status');
            $table->rememberToken();
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
        //
    }
}
