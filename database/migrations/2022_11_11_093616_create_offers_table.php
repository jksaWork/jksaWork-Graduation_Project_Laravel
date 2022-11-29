<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_desc');
            $table->string('long_desc');
            $table->integer('price');
            $table->string('location');
            $table->boolean('is_avaliable')->default(1);
            $table->enum('status' , ['new' , 'approved' , 'rejected', 'under_mainten' , 'completed']);
            $table->string('long');
            $table->string('lat');
            $table->foreignId('service_id')->references('id')->on('services');
            $table->foreignId('area_id')->references('id')->on('areas');
            $table->foreignId('type_id')->references('id')->on('offer_types');
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->foreign('agent_id')->references('id')->on('agents');
            $table->string('main_image');
            $table->softDeletes();
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
        Schema::dropIfExists('offers');
    }
}
