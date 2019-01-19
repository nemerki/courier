<?php namespace Avirdigital\Courier\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAvirdigitalCourierCars extends Migration
{
    public function up()
    {
        Schema::create('avirdigital_courier_cars', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('brand_id')->nullable()->unsigned();
            $table->integer('mdl_id')->nullable()->unsigned();
            $table->integer('trim_id')->nullable()->unsigned();
            $table->integer('color_id')->nullable()->unsigned();
            $table->integer('year')->nullable()->unsigned();
            $table->string('car_number')->nullable();
            $table->boolean('is_active')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('avirdigital_courier_cars');
    }
}
