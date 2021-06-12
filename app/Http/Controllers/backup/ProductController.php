<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\RelatedProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        //return $id;
        $product =Product::findorfail($id);
        $Related_Products = RelatedProduct::RelatedProducts($id);
        $mightAlsoLike = Product::where('Product_id', '!=', $id)
                                ->where('Category_ID','=',$product->Category_ID)
                                ->inRandomOrder()
                                ->take(20)
                                ->get();
       // return $mightAlsoLike;

        return view('product.Description')->with([
            'product' => $product,
            'relatedProducts' => $Related_Products,
            'mightAlsoLike' => $mightAlsoLike,
            'fromValue' => 'Product'
        ]);
        //return view('product.Description', compact('product'));

    }
    public function indexExplore(Request $req)
    {
        //
        //return $id;
        $SelectedCategory ="ALL";
        if ($req->has('selCategory')) {
            $SelectedCategory = $req->get('selCategory');
        } 
        // if ($req->has('selCategory')) {
        //     $SelectedCategory = $req->get('selCategory');
        // } 
        // if ($req->has('selCategory')) {
        //     $SelectedCategory = $req->get('selCategory');
        // } 

        if($SelectedCategory == "ALL") {
            $products =Product::inRandomOrder()->get();
        }else{
            $products =Product::where('Category_ID',$SelectedCategory)->inRandomOrder()->get();
        }
        $colours = DB::select('select * from colours');
        $Brands = DB::select('select * from brand');
        
        $Categories = Category::get();

        
       // return $mightAlsoLike;

        return view('product.Explore')->with([
            'products' => $products,
            'Categories' => $Categories,
            'selectedCatValue' => $SelectedCategory,
            'colours' => $colours,
            'Brands' =>$Brands,
            'fromValue' => 'Product'
        ]);
        //return view('product.Description', compact('product'));

    }

    // public function ProductFectchBasedOnSubCategory(Request $req)
    // {

    //     $Category_ID = request('categoryid');
    //     $Sub_Category_ID = request('subcategoryid');
    //     $CheckboxChecked = request('isChecked');
    //     if($CheckboxChecked){
    //             $products =Product::where('Category_ID',$Category_ID)
    //                                 ->where('Sub_Category_ID',$Sub_Category_ID)
    //                                 ->inRandomOrder()->get();
    //     }else{
    //             $products =Product::where('Category_ID',$Category_ID)->inRandomOrder()->get();
    //     }
    //     return response(array(
    //         'success' => true,
    //          'Category_ID' => $Category_ID,
    //          'Sub_Category_ID' => $Sub_Category_ID,
    //          'products'=>$products,
    //         'message' => "Category Fetched."
    //     ),201,[]);

    // }

    public function ProductFectchBasedOnSubCategory(Request $req)
    {

        $selectedCategories = request('categories');
        $selCategory = request('selectedCat');
         $minimum_price =request('min_price');
        $maximum_price =request('max_price');
        

        $products = new Collection();
        
     // if( !$selectedCategories->isEmpty()){
        
        foreach ($selectedCategories as $category) {

            # code...
            $cat_arr = explode ("-", $category); 

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

        }
    // }else{
    //      $products =Product::whereBetween('Unit_price', [$minimum_price, $maximum_price]) ->inRandomOrder()->get();
    // }
       
        $Unique_List = $products->unique('Product_id')->all();
        return response(array(
            'success' => true,
             // 'Category_ID' => $Category_ID,
             // 'Sub_Category_ID' => $Sub_Category_ID,
             // 'Sub_Sub_Category_ID' => $Sub_Sub_Category_ID,
             'products'=>$Unique_List,
            'message' => "Category Fetched."
        ),201,[]);

    }

    
    public function ProductFectchBasedOnPrice(Request $req)
    {

       $selectedCategories = request('categories');
        $selCategory = request('selectedCat');
        $minimum_price =request('min_price');
        $maximum_price =request('max_price');
         
        

        $products = new Collection();
         // if(count($selectedCategories)){

            // return $minimum_price;
        
        foreach ($selectedCategories as $category) {
            // return "success";
            # code...
            $cat_arr = explode ("-", $category); 

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

        }

     // }
    // else{
    //         $products =Product::where('Category_ID',$selCategory)->whereBetween('Unit_price', [$minimum_price, $maximum_price])->inRandomOrder()->get();
    // }
       
        $Unique_List = $products->unique('Product_id')->all();
        return response(array(
            'success' => true,
            'products'=>$Unique_List,
            'message' => "Category Fetched."
        ),201,[]);

    }
    public function ProductFectchBasedOnFilters(Request $req)
    {

       $selectedCategories = request('categories');
        $selCategory = request('selectedCat');
        $minimum_price =request('min_price');
        $maximum_price =request('max_price');
         $selBrands=request('selBrands'); 
          $selColours=request('selColours'); 
          $colourCount=request('colourCount'); 
          $brandCount=request('brandCount');  
          
            //return ($selColours);             

        $products = new Collection();
         // if(count($selectedCategories)){

            // return $minimum_price;
        
        foreach ($selectedCategories as $category) {
            // return "success";
            # code...
            $cat_arr = explode ("-", $category); 
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
            else
            {
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

     // }
    // else{
    //         $products =Product::where('Category_ID',$selCategory)->whereBetween('Unit_price', [$minimum_price, $maximum_price])->inRandomOrder()->get();
    // }
       
        $Unique_List = $products->unique('Product_id')->all();
        return response(array(
            'success' => true,
            'products'=>$Unique_List,
            'message' => "Category Fetched."
        ),201,[]);

    }
    //  public function ProductFectchBasedOnPrice(Request $req)
    // {

    //     $Category_ID = request('categoryid');
    //     $Sub_Category_ID = request('subcategoryid');
    //     $Sub_Sub_Category_ID = request('subsubcategoryid');
    //     $minimum_price =request('min_price');
    //     $maximum_price =request('max_price');
    //     $CheckboxChecked = request('isChecked');
    //     if($Category_ID != "ALL" ){
    //         if($Sub_Category_ID != "ALL" ){
    //             if($Sub_Sub_Category_ID != "ALL"){
    //                 $products =Product::where('Category_ID',$Category_ID)
    //                                 ->where('Sub_Category_ID',$Sub_Category_ID)
    //                                 ->where('Sub_Sub_Category_ID',$Sub_Sub_Category_ID)
    //                                 ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
    //                                 ->inRandomOrder()->get();
    //             }else{
    //                 $products =Product::where('Category_ID',$Category_ID)
    //                                 ->where('Sub_Category_ID',$Sub_Category_ID)
    //                                 ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
    //                                 ->inRandomOrder()->get();
    //             }

    //         }else{

    //             $products =Product::where('Category_ID',$Category_ID)
    //                                 ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
    //                                 ->inRandomOrder()->get();
    //         }
            
    //     }else {
    //             $products =Product::whereBetween('Unit_price', [$minimum_price, $maximum_price])
    //                                 ->inRandomOrder()->get();
    //     }
    //     return response(array(
    //         'success' => true,
    //          'Category_ID' => $Category_ID,
    //          'Sub_Category_ID' => $Sub_Category_ID,
    //          'Sub_Sub_Category_ID' => $Sub_Sub_Category_ID,
    //          'products'=>$products,
    //         'message' => "Category Fetched."
    //     ),201,[]);

    // }
    // public function ProductFectchBasedOnSubSubCategory(Request $req)
    // {

    //     $Category_ID = request('categoryid');
    //     $Sub_Category_ID = request('subcategoryid');
    //     $Sub_Sub_Category_ID = request('subsubcategoryid');
    //     $CheckboxChecked = request('isChecked');
    //     if($CheckboxChecked){
    //             $products =Product::where('Category_ID',$Category_ID)
    //                                 ->where('Sub_Category_ID',$Sub_Category_ID)
    //                                 ->where('Sub_Sub_Category_ID',$Sub_Sub_Category_ID)
    //                                 ->inRandomOrder()->get();
    //     }else{
    //             $products =Product::where('Category_ID',$Category_ID)
    //                                 ->where('Sub_Category_ID',$Sub_Category_ID)
    //                                 ->inRandomOrder()->get();
    //     }

    //     return response(array(
    //         'success' => true,
    //          'Category_ID' => $Category_ID,
    //          'Sub_Category_ID' => $Sub_Category_ID,
    //          'Sub_Sub_Category_ID' => $Sub_Sub_Category_ID,
    //          'products'=>$products,
    //         'message' => "Category Fetched."
    //     ),201,[]);

    // }



    
}
