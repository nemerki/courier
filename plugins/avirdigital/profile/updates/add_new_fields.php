<?php namespace Avirdigital\Profile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddNewFields extends Migration
{

    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('phone');
            $table->boolean('is_driver')->default(0);
            $table->string('ip_address')->nullable();
        });
    }

    public function down()
    {
        $table->dropDown([
            'phone',
            'is_driver',
            'ip_address',
        ]);
    }

}
