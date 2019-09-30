<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditsCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits_category', function (Blueprint $table) {
            $table->bigIncrements('id');

			$table->string('name');

			$table->string('slug')->unique();

			$table->unsignedInteger('created_by')->nullable();

			$table->softDeletes();

            $table->timestamps();

			$table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credits_category');
    }
}
