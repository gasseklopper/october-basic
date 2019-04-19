<?php namespace Morley\Basiccontent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMorleyBasiccontent extends Migration
{
    public function up()
    {
        Schema::table('morley_basiccontent_', function($table)
        {
            $table->boolean('sameheight')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('morley_basiccontent_', function($table)
        {
            $table->dropColumn('sameheight');
        });
    }
}
