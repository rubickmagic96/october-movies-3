<?php namespace Rasyidcode\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRasyidcodeMovies2 extends Migration
{
    public function up()
    {
        Schema::table('rasyidcode_movies_', function($table)
        {
            $table->text('actors')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('rasyidcode_movies_', function($table)
        {
            $table->dropColumn('actors');
        });
    }
}
