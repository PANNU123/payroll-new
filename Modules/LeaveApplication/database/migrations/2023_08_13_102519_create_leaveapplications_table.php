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
        Schema::create('leaveapplications', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('RESTRICT');
            $table->year('leave_year');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('RESTRICT');
            $table->unsignedBigInteger('leave_id')->nullable();
            $table->foreign('leave_id')->references('id')->on('leavecategories')->onDelete('RESTRICT');

            $table->unsignedBigInteger('recommend_id')->nullable();
            $table->foreign('recommend_id')->references('id')->on('users')->onDelete('RESTRICT');
            $table->unsignedBigInteger('approve_id')->nullable();
            $table->foreign('approve_id')->references('id')->on('users')->onDelete('RESTRICT');

            $table->date('from_date');
            $table->date('to_date');
            $table->smallInteger('nods')->default(0);
            $table->date('duty_date')->nullable();
            $table->char('application_time')->default('B')->comment('B=Before,A=After');
            $table->string('reason')->nullable();
            $table->string('leave_attachment',240)->nullable();
            $table->string('location')->nullable();
            $table->integer('alternate_id')->nullable();
            $table->timestamp('alternate_submit')->nullable();


            $table->timestamp('recommend_date')->nullable();

            $table->timestamp('approve_date')->nullable();
            $table->mediumText('notes')->nullable();
            $table->char('status',1)->default('C')->comment('C = Created, A=Approved, R=Recommended, D=Dismissed, E=Enjoyed, L=Cancel');


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
        Schema::dropIfExists('leaveapplications');
    }
};
