<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id');
            $table->string('employee_name');
            $table->string('occupation');
            $table->bigInteger('income');
            $table->bigInteger('next_of_kin_name');
            $table->bigInteger('next_of_kin_relationship');
            $table->text('address');
            $table->unsignedBigInteger('daily_contribution_amount');
            $table->text('national_id');
            $table->text('passport');
            $table->text('utility');
            $table->text('signature');
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
        Schema::dropIfExists('customer_details');
    }
}
