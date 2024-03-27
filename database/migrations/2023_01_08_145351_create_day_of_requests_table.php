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
        Schema::create('day_of_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('day_off_request')->nullable();
            $table->integer('status_id')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('update_by')->nullable();
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
        Schema::dropIfExists('day_of_requests');
    }
};
