<?php namespace Avirdigital\Courier\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAvirdigitalCourierColors extends Migration
{
    public function up()
    {
        Schema::create('avirdigital_courier_colors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('color_code')->nullable();
            $table->boolean('is_active')->default(1);
            $table->integer('sort_order')->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('avirdigital_courier_colors');
    }
}
