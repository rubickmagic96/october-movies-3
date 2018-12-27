<?php namespace Rasyidcode\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRasyidcodeMovies extends Migration
{
    public function up()
    {
        Schema::create('rasyidcode_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('year')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rasyidcode_movies_');
    }
}
