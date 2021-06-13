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
use Ripoo\OdooClient;

class productExtraController extends Controller
{
    //
    private $odooclient;
    public function __construct()
    {
        //----------------------------------------------------------------------------------//
        //Odoo Main DB
                // $host = ' https://abcprojectwll.odoo.com';
                // $db = 'abcprojectwll-abcqatar-production-116225';
                // $user = 'deliverysajja@gmail.com';
                // $password = 'abc123$';
        //----------------------------------------------------------------------------------//
        //test DB
        $host = 'https://abcprojectwll-test-2662596.dev.odoo.com';
        $db = 'abcprojectwll-test-2662596';
        $user = 'developer@abc.uae';
        $password = 'MUDjsEdN7S';
        $client = new OdooClient($host, $db, $user, $password);
        $this->odooclient = $client;
    }
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


        // Odoo API Calling and stock updating section 
        
        $stockDetails = Product::getStockDetails($product->barcode,$this->odooclient);
        if(!empty($stockDetails)){
            if($stockDetails[0]['forecasted_qty'] != 0){
                $product->unit_in_stock  = $stockDetails[0]['forecasted_qty'];
            }else{
                $product->unit_in_stock  = 0;
            }
        }
        
        //end of API Calling and stock updating
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
