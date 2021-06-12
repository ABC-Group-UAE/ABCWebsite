<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        // product for sanitary
        Product::insert([
            'Product_id' => Str::random(10),
            'Category_ID' => 'S',
            'Sub_Category_ID' => '2',
            'Sub_Sub_Category_ID' => '',
            'product_name' => Str::random(10),
            'shape' => 'Square',
            'colour' => 'Grey',

            'size' => 'Small',
            'description' => Str::random(50),
            'long_description' => Str::random(100),
            'Sku' => Str::random(10),
            'MSRP' => Str::random(10),
            'Available_sizes' => 'Small,llarge,medium',
            'Available_colours' => 'Grey,black white',
            'Finish' => 'Classic',
            'material' => Str::random(10),
            'discount' => 5 ,
            'discount_price' => 1000,
            'unit_in_stock' => 42,
            'Thickness' => 5,
            'Dimension' => 12,
            'outlet_diameter' => 3,
            'Available_variance' => 'Small,llarge,medium',
            'Brand' => 'BathX',
            'Unit_of_measurement' => 'mm',
            'tax_rate' => '5',
            'Unit_price' => 1200,
            'category' => Str::random(10),
            'Application'=>Str::random(50),

            'Type' => '5',
            'MainImage' => '0.jpg',
            'Thumpnail1' => '0.jpg',
            'Thumpnail2' => '1.jpg',
            'Thumpnail3' => '2.jpg',
            'Thumpnail4' => '3.jpg',
            'Thumpnail5' => '4.jpg',

            'Thumpnail6' => '2.jpg',
            'TechnicalSheet' => '0.jpg',
            
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }

}
