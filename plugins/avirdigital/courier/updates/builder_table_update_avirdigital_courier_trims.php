<?php namespace Avirdigital\Courier\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalCourierTrims extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_courier_trims', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_courier_trims', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
