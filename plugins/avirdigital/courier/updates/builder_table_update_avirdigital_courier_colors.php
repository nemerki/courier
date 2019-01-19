<?php namespace Avirdigital\Courier\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalCourierColors extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_courier_colors', function($table)
        {
            $table->string('name')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('color_code')->change();
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_courier_colors', function($table)
        {
            $table->dropColumn('name');
            $table->increments('id')->unsigned()->change();
            $table->string('color_code', 191)->change();
        });
    }
}
