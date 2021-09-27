<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('email', 50)->unique();
            $table->string('username', 50);
            $table->string('password');
            $table->string('phone_number', 15);
            $table->string('extension', 15);
            $table->string('status', 30);
            $table->text('api_token')->nullable();
            $table->dateTime('api_token_expire_date')->nullable();
            $table->timestamps();
            $table->string('activation_token')->nullable();

            // $table->string('department_id', 30);
            // $table->string('village_id', 30);

            // $table->foreign('department_id')
            //     ->references('id')
            //     ->on('departments');
            // $table->foreign('village_id')
            //     ->references('id')
            //     ->on('villages');

            $table->index('first_name');
            $table->index('last_name');
            $table->index('email');
            $table->index('username');
            $table->index('phone_number');
            $table->index('status');
            $table->index('api_token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
