<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Product;

class WishListController extends Controller
{
    //

    public function addToWhishList()
	{
    	if(Session::has('id')){
    		$SId = Session::get('id');
    	}else{
    		$SId = 0;
    	}
    	
    	$id = request('id');
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
        $wish_list = app('wishlist');
        $items = $wish_list::session($SId)->getContent();
        $finalQty =  $qty;
		foreach($items as $item)
		{
				
				 if(strcmp($item->id,$id) == 0 ){

            		$AlreadyAdded = true;
                    $finalQty = $finalQty + $item->quantity;
            		//return $item->quantity;
            		$item = $wish_list::session($SId)->update($id, array(
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
            $item= $wish_list::session($SId)->add($id, $product->product_name, $product->Unit_price, $qty, $customAttributes);
            
        }
        $addedItem = $wish_list::session($SId)->get($id);
        $count =$wish_list::session($SId)->getContent()->count();
        $summedPrice = $wish_list::session($SId)->get($id)->getPriceSum();
        return response(array(
            'success' => true,
             'data' => $item,
             'count' => $count,
             'product'=>$product,
             'cartitem' => $addedItem,
             'summedPrice' => $summedPrice,
             'AlreadyAdded' => $AlreadyAdded,
             'message' => "item added."
        ),201,[]);
 
        //return "success";
        // return response(array( 
        //     'success' => true,
        //      'data' => $item,
        //      'cartitem' => $addedItem,
        //     'message' => "item added."
        // ),201,[]);
    }

    function wishListUpdate(){
       if(Session::has('id')){
    		$SId = Session::get('id');
    	}else{
    		$SId = 0;
    	}
         //echo $SId;
         $id = request('id');
        // $id = $req->get('Product_id');
        $qty = request('Quantity');
        //$product = Product::findorfail($id);
        $wish_list = app('wishlist');
        $item = $wish_list->update($id, array(
                        'quantity' => [
                                        'relative' => false,
                                        'value' => $qty
                                      ]
                    ));
        $addedItem = $wish_list->get($id);
        $summedPrice =0;
        $summedPrice = app('wishlist')::session($SId)->get($id)->getPriceSum();
        return response(array(
            'success' => true,
             'data' => $item,
             'cartitem' => $addedItem,
             'message' => "item Updated.",
             'summedPrice' => $summedPrice
        ),201,[]);

    }

    function cartRemove(){
        //if(Session::has('id')){
    	// 	$SId = Session::get('id');
    	// }else{
    	// 	$SId = 0;
    	// }
         //echo $SId;
         $id = request('id');
        $wish_list = app('wishlist')::session($SId);
        $item = $wish_list->remove($id);
        $count = $wish_list->getContent()->count();
        return response(array(
            'success' => true,
             'data' => $item,
             'count' => $count,
             'message' => "item Removed."
        ),201,[]);

    }

    public function add(Request $req)
    {
          // get this from session or wherever it came from
        if(Session::has('id')){
            $SId = Session::get('id');
        }else{
            $SId = 0;
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
            'message' => "item added."
        ),201,[]);
    }


}
