<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditsInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits_information', function (Blueprint $table) {
            $table->bigIncrements('id');

			$table->string('title');

			$table->string('slug')->unique();

			$table->string('description');

			$table->text('content');

			$table->integer('web_order')->unique();

			$table->bigInteger('author_id')->unsigned();
			$table->datetime('author_approve')->nullable();

			$table->bigInteger('editor_id')->unsigned()->nullable();
			$table->datetime('editor_approve')->nullable();

			$table->bigInteger('publisher_id')->unsigned()->nullable();
			$table->datetime('publisher_approve')->nullable();

			$table->boolean('publish_permanent')->nullable();
			$table->datetime('publish_date_start')->nullable();
			$table->datetime('publish_date_end')->nullable();

			$table->softDeletes();

			$table->timestamps();

			$table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');

			$table->foreign('editor_id')->references('id')->on('users')->onDelete('cascade');

			$table->foreign('publisher_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credits_information');
    }
}
