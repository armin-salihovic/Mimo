<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSculpturesTables extends Migration
{
    public function up()
    {
        Schema::create('sculptures', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 200)->nullable();

            // your generated model and form include a description field, to get you started, but feel free to get rid of it if you don't need it
            $table->text('description')->nullable();

            $table->integer('position')->unsigned()->nullable();

            $table->integer('year')->nullable();
        });

        Schema::create('sculpture_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'sculpture');
        });


    }

    public function down()
    {

        Schema::dropIfExists('sculpture_slugs');
        Schema::dropIfExists('sculptures');
    }
}
