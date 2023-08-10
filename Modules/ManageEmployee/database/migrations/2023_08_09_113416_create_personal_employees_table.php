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
        Schema::create('manageemployees', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('RESTRICT');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('RESTRICT');

            $table->unsignedBigInteger('title_id')->nullable();
            $table->foreign('title_id')->references('id')->on('titles')->onDelete('RESTRICT');

            $table->unsignedBigInteger('religion_id')->nullable();
            $table->foreign('religion_id')->references('id')->on('religions')->onDelete('RESTRICT');


            $table->string('signature',150)->nullable();
            $table->string('pr_address',240)->comment('Present Address');
            $table->string('pr_district',25);
            $table->string('pr_police_station',50)->nullable();
            $table->string('pr_post_code',4);
            $table->string('pm_address',240)->nullable()->comment('Permanent Address');
            $table->string('pm_district',25);
            $table->string('pm_police_station',50)->nullable();
            $table->string('pm_post_code',4);
            $table->string('m_address',240)->nullable()->comment('Mailing Address'); //Mailing Address
            $table->string('m_district',25);
            $table->string('m_police_station',50)->nullable();
            $table->string('m_post_code',4);

            $table->string('biography',150)->nullable();
            $table->string('father_name',100)->nullable();
            $table->string('mother_name',100)->nullable();
            $table->string('spouse_name',100)->nullable();

            $table->char('blood_group',30)->nullable();
            $table->string('last_education',240)->nullable();
            $table->string('prof_speciality',240)->nullable();
            $table->string('national_id',20)->nullable();
            $table->boolean('is_printed')->default(0);


            $table->tinyInteger('status')->default(1)->nullable();
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
        Schema::dropIfExists('manageemployees');
    }
};
