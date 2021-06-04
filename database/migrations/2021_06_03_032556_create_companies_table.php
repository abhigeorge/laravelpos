<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->default('Laravel POS');
            $table->string('company_address')->default('Laravel POS Addres');
            $table->string('company_phone')->default('+91 9847478546');
            $table->string('company_email')->default('laravelpos@laravel.com');
            $table->string('company_fax')->default('+91 9847478546');
            $table->string('company_web')->default('www.laravel.com');
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
        Schema::dropIfExists('companies');
    }
}
