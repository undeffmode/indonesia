<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('indonesia.table_prefix') . 'cities', function(Blueprint $table)
        {
            $table->char('id', 4);
            $table->char('province_id', 2);
            $table->string('name', 255);
            $table->primary('id');
            $table->foreign('province_id')->references('id')->on(config('indonesia.table_prefix') . 'provinces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(config('indonesia.table_prefix') . 'cities');
    }
}
