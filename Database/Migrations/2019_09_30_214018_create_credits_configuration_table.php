<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditsConfigurationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits_configuration', function (Blueprint $table) {
            $table->bigIncrements('id');

			$table->string('name');

			$table->string('slug')->unique();

			$table->text('description');
			$table->boolean('value_bool')->nullable();
			$table->text('value_text')->nullable();

			$table->unsignedInteger('updated_by');

			$table->softDeletes();

            $table->timestamps();

			$table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credits_configuration');
    }
}
