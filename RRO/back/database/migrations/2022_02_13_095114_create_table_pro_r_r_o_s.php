<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProRROS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_r_r_o_s', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('service_provider_id')->nullable();
            $table->unsignedBigInteger('drug_store_id');

            $table->string('fiscal_key');
            $table->date('fiscal_create_date');
            $table->date('fiscal_end_date');

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
        Schema::dropIfExists('table_pro_r_r_o_s');
    }
}
