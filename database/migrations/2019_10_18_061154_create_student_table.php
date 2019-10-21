<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('student', function (Blueprint $table)
       {
        $table-> increments('id');
        $table-> String('fName');
        $table-> String('lName');
        $table-> String('address');
           $table-> String('password');
        $table-> timestamps();

       }); //
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
