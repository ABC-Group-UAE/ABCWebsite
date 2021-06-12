<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelatedProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Related_Products', function (Blueprint $table) {
            $table->id();
            $table->String('Product_id');
            $table->foreign('Product_id')
                  ->references('Product_id')
                  ->on('products')->onUpdate('cascade')->onDelete('set null');
            $table->String('Related_Product_id');
            $table->foreign('Related_Product_id')
                  ->references('Product_id')
                  ->on('products')->onUpdate('cascade')->onDelete('set null');
            $table->String('Type_Description');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
