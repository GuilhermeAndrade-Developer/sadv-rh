<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cpf');
            $table->string('rg');
            $table->string('pis');
            $table->string('cep');
            $table->string('address');
            $table->integer('address_number');
            $table->string('state');
            $table->string('city');
            $table->integer('telephone');
            $table->string('cargo');
            $table->string('unit');
            $table->unsignedBigInteger('companies_id');
            $table->foreign('companies_id')->references('id')->on('companies')->onDelete('cascade');
            $table->string('bank');
            $table->string('branch');
            $table->string('account');
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
        Schema::dropIfExists('employees');
    }
}
