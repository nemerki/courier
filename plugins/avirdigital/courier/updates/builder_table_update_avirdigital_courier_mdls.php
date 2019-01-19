<?php namespace Avirdigital\Courier\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalCourierMdls extends Migration
{
    public function up()
    {
        Schema::rename('avirdigital_courier_models', 'avirdigital_courier_mdls');
    }
    
    public function down()
    {
        Schema::rename('avirdigital_courier_mdls', 'avirdigital_courier_models');
    }
}
