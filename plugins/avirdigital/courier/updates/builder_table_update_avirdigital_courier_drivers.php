<?php namespace Avirdigital\Courier\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalCourierDrivers extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_courier_drivers', function($table)
        {
            $table->integer('car_id')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_courier_drivers', function($table)
        {
            $table->dropColumn('car_id');
        });
    }
}
