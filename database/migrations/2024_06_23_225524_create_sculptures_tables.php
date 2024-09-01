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

            $table->integer('position')->unsigned()->nullable();
            $table->string('year')->nullable();
        });

        Schema::create('sculpture_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'sculpture');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('sculpture_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'sculpture');
        });

        Schema::create('sculpture_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'sculpture');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sculpture_revisions');
        Schema::dropIfExists('sculpture_translations');
        Schema::dropIfExists('sculpture_slugs');
        Schema::dropIfExists('sculptures');
    }
}
