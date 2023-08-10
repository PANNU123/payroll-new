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
        Schema::create('professionalemployees', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('emp_personals_id')->nullable();
            $table->foreign('emp_personals_id')->references('id')->on('manageemployees')->onDelete('RESTRICT');

            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')->references('id')->on('managedepartments')->onDelete('RESTRICT');

            $table->unsignedBigInteger('section_id')->nullable();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('RESTRICT');

            $table->unsignedBigInteger('designation_id')->nullable();
            $table->foreign('designation_id')->references('id')->on('managedesignations')->onDelete('RESTRICT');

            $table->unsignedBigInteger('working_status_id')->nullable();
            $table->foreign('working_status_id')->references('id')->on('workingstatuses')->onDelete('RESTRICT');

            $table->unsignedBigInteger('bank_id')->nullable();
            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('RESTRICT');

            $table->integer('pf_no')->default(0);
            $table->integer('report_to')->nullable();
            $table->date('joining_date')->nullable();
            $table->string('card_no',30)->nullable();
            $table->boolean('card_printed')->default(0);
            $table->boolean('overtime')->default(0)->comment('Overtime Eligibility');
            $table->string('overtime_note',999)->default(0)->comment('Overtime Instructions')->nullable();
            $table->boolean('transport')->default(0)->comment('Transport Eligibility');
            $table->string('transport_note',999)->comment('Transport Instructions')->nullable();
            $table->integer('pay_schale')->unsigned()->default(0);
            $table->string('pay_grade',50)->nullable();

            $table->char('confirm_probation',1)->default('P');
            $table->integer('confirm_period')->unsigned()->default(0);

            $table->char('bank_acc_no',17)->nullable();
            $table->date('status_change_date')->nullable();
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
        Schema::dropIfExists('professionalemployees');
    }
};
