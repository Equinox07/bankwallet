<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->uuid('uuid');
            $table->string('type')->nullable();
            $table->string('gender')->nullable();
            $table->string('username')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('phone', 20)->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->integer('two_step_auth')->default(0);
            $table->string('provider')->nullable();
            $table->integer('provider_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->string('occupany_type')->nullable();
            $table->string('employee_name')->nullable();
            $table->string('client_relation_officer')->nullable();
            $table->string('currency_id')->nullable();
            $table->integer('id_type_id')->nullable();
            $table->string('id_number')->nullable();
            $table->string('occupation')->nullable();
            $table->bigInteger('income')->nullable();
            $table->bigInteger('next_of_kin_name')->nullable();
            $table->bigInteger('next_of_kin_relationship')->nullable();
            $table->text('address')->nullable();
            $table->unsignedBigInteger('daily_contribution_amount')->nullable();
            $table->text('national_id')->nullable();
            $table->text('passport')->nullable();
            $table->text('utility')->nullable();
            $table->text('signature')->nullable();
            $table->boolean('sms_subscription')->default(false);
            $table->boolean('email_subscription')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('customers');
    }
}
