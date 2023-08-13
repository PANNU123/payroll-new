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
        Schema::create('leavecategories', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('RESTRICT');
            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('RESTRICT');

            $table->string('name',100);
            $table->char('short_code',5);
            $table->char('leave_type',1)->default('Y');
            $table->char('leave_limit',1)->default('Y');
            $table->integer('yearly_limit')->unsigned()->default(0);
            $table->char('is_carry_forward',1)->default('N');
            $table->char('show_roster',1)->default('Y');
            $table->mediumText('particulars')->nullable();
            $table->integer('status')->default(1);



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
        Schema::dropIfExists('leavecategories');
    }
};
