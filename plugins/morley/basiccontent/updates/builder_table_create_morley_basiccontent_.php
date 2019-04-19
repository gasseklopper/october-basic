<?php namespace Morley\Basiccontent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMorleyBasiccontent extends Migration
{
    public function up()
    {
        Schema::create('morley_basiccontent_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('header');
            $table->string('eyebrow')->nullable();
            $table->text('bodytext')->nullable();
            $table->text('bodyshort')->nullable();
            $table->text('quote')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('morley_basiccontent_');
    }
}
