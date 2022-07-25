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
        Schema::create('Register_Docs', function (Blueprint $table) {
            $table->string('Doc_Code');
            $table->string('Doc_Name');
            $table->string('User_Code');
            $table->string('Doc_Type');
            $table->string('Doc_Obj');
            $table->string('Doc_Description');
            $table->integer('Doc_Life');
            $table->integer('Doc_ver');
            $table->Timestamp('Doc_Timestamp');
            $table->date('Doc_StartDate');
            $table->string('Doc_Location');
            $table->integer('Doc_Status');
            $table->string('Doc_DateApprove')->nullable();
            $table->string('User_Approve')->nullable();
            $table->integer('Access_Lv')->nullable();
            $table->date('updated_at');
            $table->date('created_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group');
    }
};
