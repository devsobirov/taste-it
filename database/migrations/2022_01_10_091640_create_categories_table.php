<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {

            // jadval PK - id
            $table->id();
            // created_at , updated_at
            $table->timestamps();

            // name, description
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('image')->nullable();

        });
    }


    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
