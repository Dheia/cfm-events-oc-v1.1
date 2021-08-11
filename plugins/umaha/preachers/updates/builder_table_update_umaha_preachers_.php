<?php namespace Umaha\Preachers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmahaPreachers extends Migration
{
    public function up()
    {
        Schema::table('umaha_preachers_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('umaha_preachers_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
