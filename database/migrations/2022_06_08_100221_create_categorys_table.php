<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorys', function (Blueprint $table) {
            $table->bigIncrements('cat_id');
            $table->boolean('cat_type')->nullable();
            $table->string('cat_name', 255)->unique();
            $table->string('cat_name_bn', 255)->unique();
            $table->string('cat_slug', 255)->unique();
            $table->string('cat_title', 255)->unique()->nullable();
            $table->string('img_icon_path', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorys');
    }
}
