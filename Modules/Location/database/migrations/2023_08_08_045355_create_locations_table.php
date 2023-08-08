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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('RESTRICT');

            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')->references('id')->on('managedepartments')->onDelete('RESTRICT');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('RESTRICT');

            $table->integer('section_code')->nullable()->unsigned();

            $table->string('name');
            $table->char('short_name',25);
            $table->string('slug')->nullable();

            $table->date('started_from')->default(\Carbon\Carbon::now());
            $table->integer('report_to')->unsigned()->nullable();
            $table->integer('approval_authority')->unsigned()->nullable();
            $table->integer('headed_by')->unsigned()->nullable();
            $table->integer('second_man')->unsigned()->nullable();
            $table->string('email',190)->nullable()->unique();
            $table->string('description',240)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->integer('emp_count')->unsigned()->default(0);
            $table->integer('approved_manpower')->unsigned()->default(0);
            $table->string('top_rank',100)->nullable();

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
        Schema::dropIfExists('locations');
    }
};
