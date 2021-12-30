<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->decimal('price')->nullable();
            $table->integer('price_negotiable')->nullable();
            $table->enum('sell_options', ['deal', 'exchange', 'free'])->nullable();
            $table->string('Ad_image_0');
            $table->string('Ad_image_1')->nullable();
            $table->string('Ad_image_2')->nullable();
            $table->string('Ad_image_3')->nullable();
            $table->string('contactname');
            $table->string('contactemail');
            $table->integer('contactnumber');
            $table->integer('hide_number')->nullable();
            $table->string('location');
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
