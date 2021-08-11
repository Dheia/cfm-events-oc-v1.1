<?php namespace Umaha\Partners\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmahaPartners extends Migration
{
    public function up()
    {
        Schema::create('umaha_partners_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('fname')->nullable();
            $table->string('oname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('postal_address')->nullable();
            $table->text('residential_address')->nullable();
            $table->string('sex')->nullable();
            $table->string('status')->nullable();
            $table->string('occupation')->nullable();
            $table->date('dob')->nullable();
            $table->date('wedding_anniversary')->nullable();
            $table->boolean('reminder')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umaha_partners_');
    }
}
