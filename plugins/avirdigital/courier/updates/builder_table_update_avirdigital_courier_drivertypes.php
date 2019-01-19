<?php namespace Avirdigital\Courier\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalCourierDrivertypes extends Migration
{
    public function up()
    {
        Schema::rename('avirdigital_courier_drivertype', 'avirdigital_courier_drivertypes');
    }
    
    public function down()
    {
        Schema::rename('avirdigital_courier_drivertypes', 'avirdigital_courier_drivertype');
    }
}
