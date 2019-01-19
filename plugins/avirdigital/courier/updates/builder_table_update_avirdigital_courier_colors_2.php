<?php namespace Avirdigital\Courier\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalCourierColors2 extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_courier_colors', function($table)
        {
            $table->string('slug')->nullable();
            $table->string('color_code')->change();
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_courier_colors', function($table)
        {
            $table->dropColumn('slug');
            $table->string('color_code', 191)->change();
            $table->string('name', 191)->change();
        });
    }
}
