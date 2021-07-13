<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Product;
use App\Models\contact;
use App\Models\page;
use App\Models\enquiryModel;

class ABCCartController extends Controller
{
    //
   
    public function add(Request $req)
    {
          // get this from session or wherever it came from
        if(Session::has('id')){
            $SId = Session::get('id');
        }else{
            Session::put('id',  rand());
            $SId = Session::get('id');
        }
         //echo $SId;
         $id = request('id');
        // $id = $req->get('Product_id');
        $qty = request('Quantity');
        $product = Product::findorfail($id);
        $item = [];
        $pqty = null;
        $customAttributes = [
            'color_attr' => [
                'label' => $product->colour,
                'price' => 10.00,
            ],
            'size_attr' => [
                'label' => $product->size,
                'price' => 15.00,
            ]
        ];
        $AlreadyAdded = false;
        $items = \Cart::session($SId)->getContent();
        $finalQty =  $qty;
        
        foreach($items as $item)
		{
				
				 if(strcmp($item->id,$id) == 0 ){

            		$AlreadyAdded = true;
                    $finalQty = $finalQty + $item->quantity;
            		//return $item->quantity;
            		$item = \Cart::session($SId)->update($id, array(
            			'quantity' => [
                                        'relative' => false,
                                        'value' => $finalQty
                                      ]
            		));
            		//return  $AlreadyAdded;
                    // $pqty = \Cart::session($SId)->get($id);
            		break;
             	}

		}

       	if(!$AlreadyAdded){
            $item = \Cart::session($SId)->add($id, $product->product_name, $product->Unit_price, $qty, $customAttributes);
            // $item = \Cart::session($SId)->add(
            //                                     'id' => $id,
            //                                     'name' => $product->product_name,
            //                                     'price' => 67.99,
            //                                     'quantity' =>$qty,
            //                                     'attributes' => $customAttributes,
            //                                     'associatedModel' => 'Product'
                
            //                                 );
           // return "success";
        	//$item = \Cart::session($SId)->add($id, $product->product_name, 100, $qty, $customAttributes)->associate('product');
        }
        $addedItem = \Cart::session($SId)->get($id);
        $count = \Cart::session($SId)->getContent()->count();
        $summedPrice = \Cart::session($SId)->get($id)->getPriceSum();
        $subTotal = \Cart::session($SId)->getSubTotal();
        $vat = 0.05 * $subTotal;
        $Total = $vat+$subTotal;

          // return $SId;
    	// return $id;
        // 'pqty' => $pqty->quantity,
        return response(array(
            'success' => true,
             'data' => $item,
             'count' => $count,
             'product'=>$product,
             'cartitem' => $addedItem,
             'summedPrice' => $summedPrice,
             'AlreadyAdded' => $AlreadyAdded,
             'subTotal' => $subTotal,
             'vat' => $vat,
             'Total' => $Total,
            'message' => "item added."
        ),201,[]);
    }

    function index(){
        if(Session::has('id')){
            $SId = Session::get('id');
        }else{
            Session::put('id',  rand());
            $SId = Session::get('id');
        }
        $cartContent = \Cart::session($SId)->getContent();
        $wish_list = app('wishlist');
        $wishListContent = $wish_list->getContent();

        $Order = app('Order');
        $OrderContent = $Order->getContent(); 

        $mightAlsoLike = Product::inRandomOrder()
                                ->take(50)
                                ->get();
       // return $mightAlsoLike;
       $page = page::findorfail(3);
       //return view('home')->with('page',$page);
       return view('cart.ShopList')->with([
        'cartContent' => $cartContent,
        'mightAlsoLike' => $mightAlsoLike,
        'wishListContent' => $wishListContent,
        'fromValue' => 'ShopList',
        'page'=> $page
    ]);

        // return view('Cart.order')->with([
        //     'cartContent' => $cartContent,
        //     'mightAlsoLike' => $mightAlsoLike,
        //     'wishListContent' => $wishListContent,
        //     'fromValue' => 'ShopList',
        //     'OrderContent' => $OrderContent,
        //     'page'=> $page
        // ]);
        // return $OrderContent;
       // return view('Cart.ShopList',compact('cartContent'));
    }
    function indextoorder(){
        if(Session::has('id')){
            $SId = Session::get('id');
        }else{
            Session::put('id',  rand());
            $SId = Session::get('id');
        }
        $cartContent = \Cart::session($SId)->getContent();
        $wish_list = app('wishlist');
        $wishListContent = $wish_list->getContent();

        $Order = app('Order');
        $OrderContent = $Order->getContent(); 

        $mightAlsoLike = Product::inRandomOrder()
                                ->take(50)
                                ->get();
       // return $mightAlsoLike;
       $page = page::findorfail(3);
       //return view('home')->with('page',$page);
    //    return view('Cart.ShopList')->with([
    //     'cartContent' => $cartContent,
    //     'mightAlsoLike' => $mightAlsoLike,
    //     'wishListContent' => $wishListContent,
    //     'fromValue' => 'ShopList',
    //     'page'=> $page
    // ]);

        return view('cart.order')->with([
            'cartContent' => $cartContent,
            'mightAlsoLike' => $mightAlsoLike,
            'wishListContent' => $wishListContent,
            'fromValue' => 'ShopList',
            'OrderContent' => $OrderContent,
            'page'=> $page
        ]);
        // return $OrderContent;
       // return view('Cart.ShopList',compact('cartContent'));
    }
    function cartUpdate(){
        if(Session::has('id')){
            $SId = Session::get('id');
        }else{
            Session::put('id',  rand());
            $SId = Session::get('id');
        }
         //echo $SId;
         $id = request('id');
        // $id = $req->get('Product_id');
        $qty = request('Quantity');
        //$product = Product::findorfail($id);
        $item = \Cart::session($SId)->update($id, array(
                        'quantity' => [
                                        'relative' => false,
                                        'value' => $qty
                                      ]
                    ));
        $addedItem = \Cart::session($SId)->get($id);
        $summedPrice = \Cart::session($SId)->get($id)->getPriceSum();
         $subTotal = \Cart::session($SId)->getSubTotal();
        $vat = 0.05 * $subTotal;
        $Total = $vat+$subTotal;
        return response(array(
            'success' => true,
             'data' => $item,
             'cartitem' => $addedItem,
             'message' => "item Updated.",
             'subTotal' => $subTotal,
             'vat' => $vat,
             'Total' => $Total,
             'summedPrice' => $summedPrice
        ),201,[]);

    }


    function cartRemove(){
       if(Session::has('id')){
            $SId = Session::get('id');
        }else{
            Session::put('id',  rand());
            $SId = Session::get('id');
        }
         //echo $SId;
         $id = request('id');
        // $id = $req->get('Product_id');
        
        //$product = Product::findorfail($id);
        $item = \Cart::session($SId)->remove($id);
        $count =\Cart::session($SId)->getContent()->count();
         $subTotal = \Cart::session($SId)->getSubTotal();
        $vat = 0.05 * $subTotal;
        $Total = $vat+$subTotal;
        return response(array(
            'success' => true,
             'data' => $item,
             'count' => $count,
             'subTotal' => $subTotal,
             'vat' => $vat,
             'Total' => $Total,
             'message' => "item Removed."
        ),201,[]);

    }
    function AddingMultipleItemsToCart(){
        if(Session::has('id')){
            $SId = Session::get('id');
        }else{
            Session::put('id',  rand());
            $SId = Session::get('id');
        }
        $multipleItems = request('multipleItems');
        foreach($multipleItems as $id){
                    $product = Product::findorfail($id);
                    $item = [];
                    $customAttributes = [
                        'color_attr' => [
                            'label' => $product->colour,
                            'price' => 10.00,
                        ],
                        'size_attr' => [
                            'label' => $product->size,
                            'price' => 15.00,
                        ]
                    ];
                    $AlreadyAdded = false;
                    $items = \Cart::session($SId)->getContent();
                    $finalQty =  1;
                    foreach($items as $item)
                    {
                            
                             if(strcmp($item->id,$id) == 0 ){

                                $AlreadyAdded = true;
                                $finalQty = $finalQty + $item->quantity;
                                //return $item->quantity;
                                $item = \Cart::session($SId)->update($id, array(
                                    'quantity' => [
                                                    'relative' => false,
                                                    'value' => $finalQty
                                                  ]
                                ));
                                break;
                            }

                    }
                    if(!$AlreadyAdded){
                        $item = \Cart::session($SId)->add($id, $product->product_name, $product->Unit_price, 1, $customAttributes);
                    }


        }

        
        $count =\Cart::session($SId)->getContent()->count();
         
        return response(array(
            'success' => true,
             'count' => $count,
             'message' => "items Added to Cart."
        ),201,[]);

        
    }

    public function ContactUs(Request $request){
        if(Session::has('id')){
            $SId = Session::get('id');
        }else{
            Session::put('id',  rand());
            $SId = Session::get('id');
        }
        $name=$request->input('name');
        $mailid =$request->input('email');
        $mobile = $request->input('PhNo');
        $contact = new contact;
        $contact->CustomerName = $name;
        $contact->customer_mailid =$mailid;
        $contact->mobile = $mobile;
        
        $products = \Cart::session($SId)->getContent();
        foreach($products as $product){
            enquiryModel::create([
                'customer_mailid'=>$mailid,
                'customer_name'=>$name,
                'customer_phoneno'=>$mobile,
                'product_id'=>$product->id,
                'date'=> now()
                ]);
        }
        \Mail::to($mailid)->send(new \App\Mail\customercopy($products));
        \Mail::to("sales@abcgroup.ae")->send(new \App\Mail\cartmail($contact,$products));
         // return "Successfully Subscribed";

         $enquire_list = app('Order');
         $items = \Cart::session($SId)->getContent();
         foreach($items as $item)
         {
             $enquire_list->add($item->id, $item->name, $item->price, $item->quantity, $item->attributes);
             \Cart::session($SId)->remove($item->id);
         }
        //  echo $enquire_list;
        return redirect()->route('Cart.order',app()->getlocale());
        
        
        
    }







}
