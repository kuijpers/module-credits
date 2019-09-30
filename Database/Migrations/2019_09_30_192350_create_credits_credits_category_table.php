<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditsCreditsCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits_credits_category', function (Blueprint $table) {
            $table->bigIncrements('id');

			$table->unsignedInteger('credits_id');

			$table->unsignedInteger('credits_category_id');

			$table->softDeletes();

            $table->timestamps();

			$table->foreign('credits_id')->references('id')->on('credits')->onDelete('cascade');
			$table->foreign('credits_category_id')->references('id')->on('credits_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credits_credits_category');
    }
}
