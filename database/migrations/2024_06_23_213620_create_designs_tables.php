<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignsTables extends Migration
{
    public function up()
    {
        Schema::create('designs', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->integer('position')->unsigned()->nullable();
            $table->string('year')->nullable();
        });

        Schema::create('design_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'design');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('design_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'design');
        });

        Schema::create('design_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'design');
        });
    }

    public function down()
    {
        Schema::dropIfExists('design_revisions');
        Schema::dropIfExists('design_translations');
        Schema::dropIfExists('design_slugs');
        Schema::dropIfExists('designs');
    }
}
