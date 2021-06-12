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
            $table->String('Product_id')->unique();
            $table->String('Category_ID',3)->comment('S/A/F/FC/K/C/Z');
             $table->String('Sub_Category_ID',5);
             $table->String('Sub_Sub_Category_ID',5);
            $table->foreign('Category_ID')
                  ->references('Category_ID')
                  ->on('categories')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('Sub_Category_ID')
                  ->references('Sub_Category_ID')
                  ->on('sub_categories')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('Sub_Sub_Category_ID')
                  ->references('Sub_Sub_Category_ID')
                  ->on('sub_sub_categories')->onUpdate('cascade')->onDelete('set null');
            
            $table->String('product_name');
            $table->String('shape',50);
            $table->String('colour',50);
            $table->String('size',50);
            $table->String('description',200);
            $table->Text('long_description');
            $table->String('Sku',20);
            $table->String('MSRP');
            $table->String('Available_sizes',200);
            $table->String('Available_colours',200);
            $table->String('Finish',50);
            $table->String('material',50);
            $table->integer('discount');
            $table->Float('discount_price');
            $table->integer('unit_in_stock');
            $table->Float('Thickness');
            $table->Float('Dimension');
            $table->Float('outlet_diameter');
            $table->String('Available_variance',200);
            $table->String('Brand',50);
            $table->String('Unit_of_measurement',4);
            $table->integer('tax_rate');
            $table->Float('Unit_price');
            $table->String('category',100);
            $table->String('Type',50);
            $table->String('Application',50);
            //product image url
            $table->Text('MainImage');
            $table->Text('Thumpnail1');
            $table->Text('Thumpnail2');
            $table->Text('Thumpnail3');
            $table->Text('Thumpnail4');
            $table->Text('Thumpnail5');
            $table->Text('Thumpnail6');
            $table->Text('TechnicalSheet');



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
        Schema::dropIfExists('products');
    }
}
