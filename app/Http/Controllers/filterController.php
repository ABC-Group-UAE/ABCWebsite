<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\RelatedProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\page;
use App\Models\location;
use Illuminate\Support\Facades\Session;

class filterController extends Controller
{
    //

    public function ProductFetchBasedOnOption(Request $request)
    {
        $Product_id = $request->get('productID');
        $selColour = $request->get('SelColour');
        $selSize = $request->get('SelSize');
        $FamilyCode = $request->get('FamilyCode');
        $product =Product::findorfail($Product_id);
        $selectedProduct = Product::findorfail($Product_id);
        //dd( $selSize);
        if($selColour != ""  && $selSize != ""){
           $selectedProduct = Product::where('Category_ID','=',$product->Category_ID)
                                        ->where('Sub_Category_ID','=',$product->Sub_Category_ID)
                                        ->where('Sub_Sub_Category_ID','=',$product->Sub_Sub_Category_ID)
                                        ->where('colour','=',$selColour)
                                        ->where('size','=',$selSize)
                                        ->where('FamilyCode','=',$FamilyCode)
                                        ->first();
           
        }else{
            if($selColour != ""){
                $selectedProduct = Product::where('Category_ID','=',$product->Category_ID)
                                        ->where('Sub_Category_ID','=',$product->Sub_Category_ID)
                                        ->where('Sub_Sub_Category_ID','=',$product->Sub_Sub_Category_ID)
                                        ->where('colour','=',$selColour)
                                        ->where('FamilyCode','=',$FamilyCode)
                                        ->first();
            }else if($selSize != ""){
                $selectedProduct = Product::where('Category_ID','=',$product->Category_ID)
                                        ->where('Sub_Category_ID','=',$product->Sub_Category_ID)
                                        ->where('Sub_Sub_Category_ID','=',$product->Sub_Sub_Category_ID)
                                        ->where('size','=',$selSize)
                                        ->where('FamilyCode','=',$FamilyCode)
                                        ->first();
            }
        }
       // dd('Category_ID'.$product->Category_ID.'Sub_Category_ID'.$product->Sub_Category_ID.'Sub_Sub_Category_ID'.$product->Sub_Sub_Category_ID.'colour'.$selColour.'SupplierCode'.$supplierId);
       
      //  dd($selectedProduct);
        if($selectedProduct == null){ 
            $page = page::findorfail(5);
            return back()->with('page',$page);
        }else{
            $page = page::findorfail(4);
            return redirect()->route('Product.description',[app()->getlocale(),$selectedProduct['Product_id']])->with(['message'=> 'No Product Exist!!!','page'=>$page]);
        }
        
    } 
    public function ProductFetchBasedOnFilters(Request $req)
    {
       // return request('categories') ;
       $selectedCategories = request('categories');
        
        $selCategory = request('selectedCat');
        
        $minimum_price =request('min_price');
        
        $maximum_price =request('max_price');
        
         $selBrands=request('selBrands'); 
         
          $selColours=request('selColours'); 
          
          $colourCount=request('colourCount'); 
           
          $brandCount=request('brandCount');  
        //   return ($brandCount);
          //dd($brandCount);
                      

        //  $products[] = (object) App/Product;
         $products = new Collection;
         $unique_productList = new Collection;
        //dd($selCategory);
        foreach ($selectedCategories as $category) {
            // return "success";
            # code...
            $cat_arr = explode ("-", $category); 
            //dd ($cat_arr);
            if($colourCount == 0){

                if($brandCount == 0){
                          if(count($cat_arr) == 2){

                                    $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
                                                        ->where('Sub_Category_ID',$cat_arr[1])
                                                        ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
                                                        ->inRandomOrder()->get());
                                }else if(count($cat_arr) == 3){

                                        $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
                                                        ->where('Sub_Category_ID',$cat_arr[1])
                                                        ->where('Sub_Sub_Category_ID',$cat_arr[2])
                                                        ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
                                                        ->inRandomOrder()->get());
                                }else{
                                    if($cat_arr[0] == "ALL"){
                                            $products =Product::whereBetween('Unit_price', [$minimum_price, $maximum_price]) ->inRandomOrder()->get();

                                        }else{
                                            $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
                                                        ->whereBetween('Unit_price', [$minimum_price, $maximum_price])      
                                                        ->inRandomOrder()->get());
                                        }
                                }
                }else{
                                if(count($cat_arr) == 2){

                                    $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
                                                        ->where('Sub_Category_ID',$cat_arr[1])
                                                        ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
                                                        ->whereIn('Brand', $selBrands)
                                                        ->inRandomOrder()->get());
                                }else if(count($cat_arr) == 3){

                                        $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
                                                        ->where('Sub_Category_ID',$cat_arr[1])
                                                        ->where('Sub_Sub_Category_ID',$cat_arr[2])
                                                        ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
                                                        ->whereIn('Brand', $selBrands)
                                                        ->inRandomOrder()->get());
                                }else{
                                    if($cat_arr[0] == "ALL"){
                                            $products =Product::whereBetween('Unit_price', [$minimum_price, $maximum_price]) 
                                                                ->whereIn('Brand', $selBrands)
                                                                ->inRandomOrder()->get();

                                        }else{
                                            $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
                                                        ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
                                                        ->whereIn('Brand', $selBrands)      
                                                        ->inRandomOrder()->get());
                                        }
                                }
                }

            
            }
            else{
                    if($brandCount == 0){

                    

                        if(count($cat_arr) == 2){

                            $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
                                                ->where('Sub_Category_ID',$cat_arr[1])
                                                ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
                                                ->whereIn('colour', $selColours)
                                                ->inRandomOrder()->get());
                        }else if(count($cat_arr) == 3){

                                $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
                                                ->where('Sub_Category_ID',$cat_arr[1])
                                                ->where('Sub_Sub_Category_ID',$cat_arr[2])
                                                ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
                                                ->whereIn('colour', $selColours)
                                                ->inRandomOrder()->get());
                        }else{
                            if($cat_arr[0] == "ALL"){
                                    $products =Product::whereBetween('Unit_price', [$minimum_price, $maximum_price])
                                                        ->whereIn('colour', $selColours)
                                                        ->inRandomOrder()->get();

                                }else{
                                    $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
                                                ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
                                                ->whereIn('colour', $selColours)      
                                                ->inRandomOrder()->get());
                                }
                        }
                    }else{
                                    if(count($cat_arr) == 2){

                                            $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
                                                                ->where('Sub_Category_ID',$cat_arr[1])
                                                                ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
                                                                ->whereIn('colour', $selColours)
                                                                ->whereIn('Brand', $selBrands)
                                                                ->inRandomOrder()->get());
                                        }else if(count($cat_arr) == 3){

                                                $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
                                                                ->where('Sub_Category_ID',$cat_arr[1])
                                                                ->where('Sub_Sub_Category_ID',$cat_arr[2])
                                                                ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
                                                                ->whereIn('colour', $selColours)
                                                                ->whereIn('Brand', $selBrands)
                                                                ->inRandomOrder()->get());
                                        }else{
                                            if($cat_arr[0] == "ALL"){
                                                    $products =Product::whereBetween('Unit_price', [$minimum_price, $maximum_price])
                                                                        ->whereIn('colour', $selColours)
                                                                        ->whereIn('Brand', $selBrands)
                                                                        ->inRandomOrder()->get();

                                                }else{
                                                    $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
                                                                ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
                                                                ->whereIn('colour', $selColours) 
                                                                ->whereIn('Brand', $selBrands)     
                                                                ->inRandomOrder()->get());
                                                }
                                        }


                        }

            }

        }

        foreach($products as $product ){
            $isFavourite = $product->IsAddedAsFavourite();
            $isaddedToCart = $product->IsItemAddedtoCart();
            $product['addedAsFavourite'] = $isFavourite;
            $product['addedToCart'] = $isaddedToCart;
        }
       
        $Unique_List = $products->unique('Product_id')->all();
        // $Unique_List =collect($unique_productList)->paginate(5);
        // $Unique_List= $Unique_List->paginate(5);
        // foreach($Unique_List as $product ){
        //     $isFavourite = $product.IsAddedAsFavourite();
        //     $isaddedToCart = $product.IsItemAddedtoCart();
        //     $product.addedAsFavourite => $isFavourite;
        //     $product.addedToCart => $isaddedToCart;
        // }
        return response(array(
            'success' => true,
            'products'=>$Unique_List,
            'message' => "Category Fetched."
        ),201,[]);

    }

    

}
