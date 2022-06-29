<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeqsSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feqs_sections', function (Blueprint $table) {
            $table->id();
            $table->$table->index('category_id');
            $table->foreign('category_id')->references('id')->on('feq_categories')->onDelete('cascade');
            $table->text('question_en');
            $table->text('question_ar');
            $table->text('answer_en');
            $table->text('answer_ar');
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
        Schema::dropIfExists('feqs_sections');
    }
}
