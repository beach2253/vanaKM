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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('fk_user_owner');
            $table->string('type');
            $table->string('objective');
            $table->text('title');
            $table->text('discription');
            // $table->string('revision'); // default to 0 incrimental by 1
            // $table->string('record_life'); // life of record of this document ~(x)Years
            // $table->date('date_effective');
            // $table->date('date_approve')->nullable(); // nulled until action
            // $table->string('fk_user_approve')->nullable(); // nulled until action
            $table->string('status'); // pending / reject / approved
            $table->string('file_location');
            $table->string('permission'); //get default from doc type
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
        Schema::dropIfExists('documents');
    }
};
