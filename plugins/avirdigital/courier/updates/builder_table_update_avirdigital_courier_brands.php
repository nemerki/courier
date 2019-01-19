<?php namespace Avirdigital\Courier\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalCourierBrands extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_courier_brands', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_courier_brands', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
