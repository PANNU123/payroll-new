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
        Schema::create('leaveregisters', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('RESTRICT');
            $table->date('leave_year');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('RESTRICT');
            $table->unsignedBigInteger('leave_id')->nullable();
            $table->foreign('leave_id')->references('id')->on('leavecategories')->onDelete('RESTRICT');
            $table->integer('leave_eligible')->unsigned()->default(0);
            $table->integer('leave_enjoyed')->unsigned()->default(0);
            $table->integer('leave_balance')->unsigned()->default(0);
            $table->date('last_leave')->nullable();

            $table->tinyInteger('status')->default(1);

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();

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
        Schema::dropIfExists('leaveregisters');
    }
};
