<?php namespace Avirdigital\Courier\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalCourierTrims2 extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_courier_trims', function($table)
        {
            $table->string('slug')->change();
            $table->renameColumn('model_id', 'mdl_id');
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_courier_trims', function($table)
        {
            $table->string('slug', 191)->change();
            $table->renameColumn('mdl_id', 'model_id');
        });
    }
}
