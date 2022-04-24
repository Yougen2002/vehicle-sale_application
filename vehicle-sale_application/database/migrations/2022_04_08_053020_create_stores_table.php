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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('manufacturer_id')->unsigned(); //bigint 10-unsigned
            $table-> foreign('manufacturer_id') ->references('id')->on('manufacturers');
            $table -> longText('address');
            $table -> string('name'); //varchar 255
            $table -> boolean('is_active') -> default(true); //tiny 2-0 or1
            $table -> longText('description');//text
            $table -> string('image')-> nullable(); //varchar 255
            $table -> softDeletes();
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
        Schema::dropIfExists('stores');
    }
};
