<?php namespace Rasyidcode\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRasyidcodeMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('rasyidcode_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rasyidcode_movies_genres');
    }
}
