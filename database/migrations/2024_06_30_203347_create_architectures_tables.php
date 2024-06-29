<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchitecturesTables extends Migration
{
    public function up()
    {
        Schema::create('architectures', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->integer('position')->unsigned()->nullable();
            $table->string('start_year')->nullable();
            $table->string('end_year')->nullable();
        });

        Schema::create('architecture_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'architecture');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->text('intro')->nullable();
            $table->string('status')->nullable();
            $table->string('location')->nullable();
        });

        Schema::create('architecture_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'architecture');
        });

        Schema::create('architecture_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'architecture');
        });
    }

    public function down()
    {
        Schema::dropIfExists('architecture_revisions');
        Schema::dropIfExists('architecture_translations');
        Schema::dropIfExists('architecture_slugs');
        Schema::dropIfExists('architectures');
    }
}
