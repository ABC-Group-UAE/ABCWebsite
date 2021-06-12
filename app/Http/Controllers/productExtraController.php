<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\RelatedProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\page;
use Illuminate\Support\Facades\Session;

class productExtraController extends Controller
{
    //
    public function index($lang,$id)
    {
        //
        //return $id;
        if(! Session::has('id')){
            Session::put('id',  rand());
        }
        $product =Product::findorfail($id);
        $Related_Products = RelatedProduct::RelatedProducts($id);
        $mightAlsoLike = Product::where('Product_id', '!=', $id)
                                ->where('Category_ID','=',$product->Category_ID)
                                ->inRandomOrder()
                                ->take(20)
                                ->get();

        if(!empty($product->Sub_Category_ID) && !empty($product->Sub_Sub_Category_ID) &&  strcmp($product->Sub_Category_ID,'')!=0 && strcmp($product->Sub_Sub_Category_ID,'')!=0){
            $mightAlsoLike = Product::where('Product_id', '!=', $id)
                                ->where('Category_ID','=',$product->Category_ID)
                                ->where('Sub_Category_ID','=',$product->Sub_Category_ID)
                                ->where('Sub_Sub_Category_ID','=',$product->Sub_Sub_Category_ID)
                                ->inRandomOrder()
                                ->take(20)
                                ->get();
        }else{
            $mightAlsoLike = Product::where('Product_id', '!=', $id)
                                ->where('Category_ID','=',$product->Category_ID)
                                ->where('Sub_Category_ID','=',$product->Sub_Category_ID)
                                ->inRandomOrder()
                                ->take(20)
                                ->get();
        }
        // return $mightAlsoLike;
       $page = page::findorfail(4); 
        // return $product;
        return view('product.Description')->with([ 'product' => $product,
            'relatedProducts' => $Related_Products,
            'mightAlsoLike' => $mightAlsoLike,
            'fromValue' => 'Product',
            'page' => $page
        ]);
        //return view('product.Description', compact('product'));

    }
}
