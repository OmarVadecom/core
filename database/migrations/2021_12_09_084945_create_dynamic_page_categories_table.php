<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDynamicPageCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('dynamic_page_categories', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('language_id')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->string('title')->unique();
            $table->string('slug');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dynamic_page_categories');
    }
}
