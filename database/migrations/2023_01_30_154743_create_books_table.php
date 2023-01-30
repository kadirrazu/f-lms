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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title_bn');
            $table->string('title_en')->nullable();
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('writer_id');
            $table->unsignedBigInteger('publisher_id');
            $table->unsignedBigInteger('category_id');
            $table->integer('printed_price')->nullable();
            $table->integer('purchase_price')->nullable();
            $table->integer('pages')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('collection_method_id');
            $table->integer('entry_no')->nullable();
            $table->date('entry_date')->nullable();
            $table->unsignedBigInteger('storage_id');
            $table->unsignedBigInteger('state_id');
            $table->boolean('recommended')->default(0);
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->timestamps();
			
            $table->foreign('writer_id')->references('id')->on('writers');
            $table->foreign('publisher_id')->references('id')->on('publishers');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('collection_method_id')->references('id')->on('collection_methods');
            $table->foreign('storage_id')->references('id')->on('storages');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
