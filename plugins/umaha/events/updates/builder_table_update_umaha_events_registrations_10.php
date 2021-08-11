<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmahaEventsRegistrations10 extends Migration
{
    public function up()
    {
        Schema::table('umaha_events_registrations', function($table)
        {
            $table->string('arrival_date')->nullable()->unsigned(false)->default(null)->change();
            $table->string('departure_date')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('umaha_events_registrations', function($table)
        {
            $table->date('arrival_date')->nullable()->unsigned(false)->default(null)->change();
            $table->date('departure_date')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
