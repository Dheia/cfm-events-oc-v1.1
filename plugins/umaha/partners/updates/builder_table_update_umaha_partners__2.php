<?php namespace Umaha\Partners\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmahaPartners2 extends Migration
{
    public function up()
    {
        Schema::table('umaha_partners_', function($table)
        {
            $table->double('commitment', 10, 0)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('umaha_partners_', function($table)
        {
            $table->dropColumn('commitment');
        });
    }
}
