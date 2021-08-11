<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmahaEvents extends Migration
{
    public function up()
    {
        Schema::table('umaha_events_', function($table)
        {
            $table->string('email', 255)->nullable()->change();
            $table->string('phone', 255)->nullable()->change();
            $table->text('description')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('umaha_events_', function($table)
        {
            $table->string('email', 255)->nullable(false)->change();
            $table->string('phone', 255)->nullable(false)->change();
            $table->text('description')->nullable(false)->change();
        });
    }
}
