<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('n_books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Catagory');
            $table->string('Name');
            $table->mediumText('Discription');
            $table->string('Size');
            $table->integer('PaperWeight');
            $table->string('CoverType');
            $table->string('BindingType');
            $table->string('PackType');
            $table->integer("PerSmallPack");
            $table->integer("PerLargePack");
            $table->string('Images');
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
        Schema::dropIfExists('n_books');
    }
}
