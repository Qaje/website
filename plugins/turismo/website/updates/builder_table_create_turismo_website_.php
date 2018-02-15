<?php namespace Turismo\Website\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTurismoWebsite extends Migration
{
    public function up()
    {
        Schema::create('turismo_website_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->boolean('status');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('turismo_website_');
    }
}
