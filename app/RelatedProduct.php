<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelatedProduct extends Model
{
    //
    public $timestamps = true;
    public $primaryKey = ['Product_id','Related_Product_id'];
    protected $keyType = 'string';
    protected $guarded = [];

    public static function RelatedProducts($productID){
        // return $this->hasMany(Product::class,'Related_Product_id','Product_id')
        //             ->where('Product_id',$productID);
                    
       // $RelatedProducts = RelatedProduct::where('Product_id',$productID)->get();
        // $RelatedProducts   = QueryBuilder::for(Product::where('Product_id',$productID)) // base query instead of model
        //                                 ->allowedIncludes(['RelatedProduct'])
        //                                 ->where('activated', true) 

        //                                 // $RelatedProducts = Product::with('categories')->whereHas('categories', function ($query) {
        //                                 //     $query->where('slug', request()->category);
        //                                 // });

        //                                 DB::table('users')
        //     ->join('contacts', 'users.id', '=', 'contacts.user_id')
        //     ->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->select('users.*', 'contacts.phone', 'orders.price')
        //     ->get();

            // $RelatedProducts = DB::join('related_products','products.Product_id','=','related_products.Related_Product_id')
            //                             ->select('related_products.Product_id',)
            //                             ->where('related_products.Product_id','GnJwABhITp')
            //                             ->inRandomOrder()
            //                             ->take(2)
            //                             ->get();

            $RelatedProducts  = Product::join('related_products','products.Product_id','=','related_products.Related_Product_id')
                                        ->where('related_products.Product_id',$productID)
                                        ->inRandomOrder()
                                        ->take(2)
                                        ->get();
         
           return $RelatedProducts;
    }
}
