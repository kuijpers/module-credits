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

			$table->unsignedInteger('author_id');
			$table->datetime('author_approve')->nullable();

			$table->unsignedInteger('editor_id')->nullable();
			$table->datetime('editor_approve')->nullable();

			$table->unsignedInteger('publisher_id')->nullable();
			$table->datetime('publisher_approve')->nullable();

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
