<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('section_id');
            $table->string('product_name');
            $table->string('product_model');
            $table->string('product_code');
            $table->string('product_mpn');
            $table->float('product_price');
            $table->float('product_regular_price')->nullable();
            $table->float('product_discount')->nullable();
            $table->string('product_video')->nullable();
            $table->string('main_image')->nullable();
            $table->longText('description')->nullable();
            $table->string('warranty')->nullable();

            $table->string('feature_1')->nullable();
            $table->string('feature_2')->nullable();
            $table->string('feature_3')->nullable();
            $table->string('feature_4')->nullable();
            $table->string('feature_5')->nullable();



            $table->string('generation')->nullable();
            $table->string('hdd')->nullable();
            $table->string('ssd')->nullable();
            $table->string('ram')->nullable();
            $table->string('graphics')->nullable();
            $table->string('processor')->nullable();

            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->enum('is_featured',['No','Yes']);
            $table->tinyInteger('status');
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
        Schema::dropIfExists('products');
    }
}
