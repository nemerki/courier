<?php namespace Avirdigital\Courier\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAvirdigitalCourierDrivers extends Migration
{
    public function up()
    {
        Schema::create('avirdigital_courier_drivers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('drivertype_id')->nullable()->unsigned();
            $table->integer('user_id')->nullable()->unsigned();
            $table->boolean('is_active')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('avirdigital_courier_drivers');
    }
}
