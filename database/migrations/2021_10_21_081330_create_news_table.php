<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('num_news');

            ///  article 1
            $table->string('tags_1');
            $table->string('titre_1');
            $table->string('image_1');
            $table->text('description_1');
            $table->string('lienB_1');
            ///  article 2
            $table->string('tags_2');
            $table->string('titre_2');
            $table->string('image_2');
            $table->text('description_2');
            $table->string('lienB_2');
            /// article 3
            $table->string('tags_3');
            $table->string('titre_3');
            $table->string('image_3');
            $table->text('description_3');
            $table->string('lienB_3');
            /// article 4
            $table->string('tags_4');
            $table->string('titre_4');
            $table->string('image_4');
            $table->text('description_4');
            $table->string('lienB_4');
            /// article 5
            $table->string('tags_5');
            $table->string('titre_5');
            $table->string('image_5');
            $table->text('description_5');
            $table->string('lienB_5');


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
        Schema::dropIfExists('news');
    }
}
