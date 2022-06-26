<?php

use App\RROTracking\RRO\RROStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRROSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_r_o_s', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('service_provider_id')->nullable();
            $table->unsignedBigInteger('drug_store_id');

            $table->string('name');
            $table->string('factory_key');
            $table->date('produce_date');
            $table->float('price')->nullable();

            $table->string('fiscal_key')->nullable();
            $table->date('fiscal_create_date')->nullable();
            $table->date('fiscal_end_date')->nullable();

            $table->string('status')->default(RROStatusEnum::NOT_USE()->value);

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
        Schema::dropIfExists('r_r_o_s');
    }
}
