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
        Schema::create('nodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->integer('parent_id')->nullable()->unsigned();
            $table->enum('type', ['developer', 'manager']);
    
            $table->string('department_name', 200)->nullable(); // For managers: the name of the department they are managing
            $table->string('programming_language', 200)->nullable(); // For developers: the name of the programming language they are strongest

            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('nodes');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nodes');
    }
};
