<?php namespace Rasyidcode\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRasyidcodeMoviesActors extends Migration
{
    public function up()
    {
        Schema::create('rasyidcode_movies_actors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rasyidcode_movies_actors');
    }
}
