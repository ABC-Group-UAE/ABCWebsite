<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\RelatedProduct;

class RelatedProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $now = Carbon::now()->toDateTimeString();
        // product for sanitary
        RelatedProduct::insert(
    
            [
                'Product_id' => 'GnJwABhITp',
                'Related_Product_id' => '0b4FxIA67R',
                'Type_Description' => Str::random(10),
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
