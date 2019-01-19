<?php namespace Avirdigital\Courier\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAvirdigitalCourierDrivertype extends Migration
{
    public function up()
    {
        Schema::create('avirdigital_courier_drivertype', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->decimal('conversion', 10, 0)->nullable();
            $table->boolean('is_active')->default(1);
            $table->integer('sort_order')->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('avirdigital_courier_drivertype');
    }
}
