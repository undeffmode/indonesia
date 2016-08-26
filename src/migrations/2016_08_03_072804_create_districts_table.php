<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('indonesia.table_prefix') . 'districts', function(Blueprint $table)
        {
            $table->char('id', 7);
            $table->char('city_id', 4);
            $table->string('name', 255);
            $table->primary('id');
            $table->foreign('city_id')->references('id')->on(config('indonesia.table_prefix') . 'cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(config('indonesia.table_prefix') . 'districts');
    }
}
