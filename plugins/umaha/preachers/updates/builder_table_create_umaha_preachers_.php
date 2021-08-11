<?php namespace Umaha\Preachers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmahaPreachers extends Migration
{
    public function up()
    {
        Schema::create('umaha_preachers_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umaha_preachers_');
    }
}
