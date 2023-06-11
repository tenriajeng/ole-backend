<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_materials', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->integer('course_id');
            $table->integer('course_section_id')->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('status', 20);
            $table->text('description');

            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->ipAddress('created_by_ip');
            $table->ipAddress('updated_by_ip')->nullable();
            
            $table->softDeletes();
            $table->timestamps(); 
 
            $table->index('name'); 
            $table->index('created_by');
            $table->index('status'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_materials');
    }
};
