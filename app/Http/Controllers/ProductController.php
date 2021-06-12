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

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response;
     */
    public function ProductOption(Request $request){
        $Product_id = $request->get('productID');
        $selColour = $request->get('SelColour');
        $selSize = $request->get('SelSize');
        $product =Product::findorfail($Product_id);
        $selectedProduct = Product::findorfail($Product_id);
        //dd( $selSize);
        if($selColour != ""  && $selSize != ""){
           $selectedProduct = Product::where('Category_ID','=',$product->Category_ID)
                                        ->where('Sub_Category_ID','=',$product->Sub_Category_ID)
                                        ->where('Sub_Sub_Category_ID','=',$product->Sub_Sub_Category_ID)
                                        ->where('colour','=',$selColour)
                                        ->where('size','=',$selSize)
                                        ->first();
           
        }else{
            if($selColour != ""){
                $selectedProduct = Product::where('Category_ID','=',$product->Category_ID)
                                        ->where('Sub_Category_ID','=',$product->Sub_Category_ID)
                                        ->where('Sub_Sub_Category_ID','=',$product->Sub_Sub_Category_ID)
                                        ->where('colour','=',$selColour)
                                        ->first();
            }else if($selSize != ""){
                $selectedProduct = Product::where('Category_ID','=',$product->Category_ID)
                                        ->where('Sub_Category_ID','=',$product->Sub_Category_ID)
                                        ->where('Sub_Sub_Category_ID','=',$product->Sub_Sub_Category_ID)
                                        ->where('size','=',$selSize)
                                        ->first();
            }
        }

        dd($selectedProduct);
        if($selectedProduct == null){ 
            $page = page::findorfail(5);
            return back()->with('page',$page);
        }else{
            $page = page::findorfail(4);
            return redirect()->route('Product.description',[ app()->getlocale(),$selectedProduct['Product_id'] ])->with(['message'=> 'No Product Exist!!!','page'=>$page]);
        }
    }


    // public function ProductFetchBasedOnOption(Request $request)
    // {
    //     $Product_id = $request->get('productID');
    //     $selColour = $request->get('SelColour');
    //     $selSize = $request->get('SelSize');
    //     $product =Product::findorfail($Product_id);
    //     $selectedProduct = Product::findorfail($Product_id);
    //     //dd( $selSize);
    //     if($selColour != ""  && $selSize != ""){
    //        $selectedProduct = Product::where('Category_ID','=',$product->Category_ID)
    //                                     ->where('Sub_Category_ID','=',$product->Sub_Category_ID)
    //                                     ->where('Sub_Sub_Category_ID','=',$product->Sub_Sub_Category_ID)
    //                                     ->where('colour','=',$selColour)
    //                                     ->where('size','=',$selSize)
    //                                     ->first();
           
    //     }else{
    //         if($selColour != ""){
    //             $selectedProduct = Product::where('Category_ID','=',$product->Category_ID)
    //                                     ->where('Sub_Category_ID','=',$product->Sub_Category_ID)
    //                                     ->where('Sub_Sub_Category_ID','=',$product->Sub_Sub_Category_ID)
    //                                     ->where('colour','=',$selColour)
    //                                     ->first();
    //         }else if($selSize != ""){
    //             $selectedProduct = Product::where('Category_ID','=',$product->Category_ID)
    //                                     ->where('Sub_Category_ID','=',$product->Sub_Category_ID)
    //                                     ->where('Sub_Sub_Category_ID','=',$product->Sub_Sub_Category_ID)
    //                                     ->where('size','=',$selSize)
    //                                     ->first();
    //         }
    //     }

    //     //dd($selectedProduct);
    //     if($selectedProduct == null){ 
    //         $page = page::findorfail(5);
    //         return back()->with('page',$page);
    //     }else{
    //         $page = page::findorfail(4);
    //         return redirect()->route('Product.description', $selectedProduct['Product_id'])->with(['message'=> 'No Product Exist!!!','page'=>$page]);
    //     }
        
    // } 
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
       // return $mightAlsoLike;
       $page = page::findorfail(4); 
       return $product;
        return view('product.Description')->with([ 'product' => $product,
            'relatedProducts' => $Related_Products,
            'mightAlsoLike' => $mightAlsoLike,
            'fromValue' => 'Product',
            'page' => $page
        ]);
        //return view('product.Description', compact('product'));

    }
    public function indexExplore(Request $req)
    {
        //
        //return $id;
        if(! Session::has('id')){
            Session::put('id',  rand());
        }
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
       $page = page::findorfail(5);
        return view('product.Explore')->with([
            'products' => $products,
            'Categories' => $Categories,
            'selectedCatValue' => $SelectedCategory,
            'colours' => $colours,
            'Brands' =>$Brands,
            'fromValue' => 'Product',
            'page' => $page
        ]);
        //return view('product.Description', compact('product'));

    }
   
    // public function ProductFetchBasedOnFilters(Request $req)
    // {
    //    // return request('categories') ;
    //    $selectedCategories = request('categories');
        
    //     $selCategory = request('selectedCat');
        
    //     $minimum_price =request('min_price');
        
    //     $maximum_price =request('max_price');
        
    //      $selBrands=request('selBrands'); 
         
    //       $selColours=request('selColours'); 
          
    //       $colourCount=request('colourCount'); 
           
    //       $brandCount=request('brandCount');  
    //     //   return ($brandCount);
    //       //dd($brandCount);
                      

    //     //  $products[] = (object) App/Product;
    //      $products = new Collection;
    //      $unique_productList = new Collection;
    //     //dd($selCategory);
    //     foreach ($selectedCategories as $category) {
    //         // return "success";
    //         # code...
    //         $cat_arr = explode ("-", $category); 
    //         //dd ($cat_arr);
    //         if($colourCount == 0){

    //             if($brandCount == 0){
    //                       if(count($cat_arr) == 2){

    //                                 $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
    //                                                     ->where('Sub_Category_ID',$cat_arr[1])
    //                                                     ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
    //                                                     ->inRandomOrder()->get());
    //                             }else if(count($cat_arr) == 3){

    //                                     $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
    //                                                     ->where('Sub_Category_ID',$cat_arr[1])
    //                                                     ->where('Sub_Sub_Category_ID',$cat_arr[2])
    //                                                     ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
    //                                                     ->inRandomOrder()->get());
    //                             }else{
    //                                 if($cat_arr[0] == "ALL"){
    //                                         $products =Product::whereBetween('Unit_price', [$minimum_price, $maximum_price]) ->inRandomOrder()->get();

    //                                     }else{
    //                                         $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
    //                                                     ->whereBetween('Unit_price', [$minimum_price, $maximum_price])      
    //                                                     ->inRandomOrder()->get());
    //                                     }
    //                             }
    //             }else{
    //                             if(count($cat_arr) == 2){

    //                                 $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
    //                                                     ->where('Sub_Category_ID',$cat_arr[1])
    //                                                     ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
    //                                                     ->whereIn('Brand', $selBrands)
    //                                                     ->inRandomOrder()->get());
    //                             }else if(count($cat_arr) == 3){

    //                                     $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
    //                                                     ->where('Sub_Category_ID',$cat_arr[1])
    //                                                     ->where('Sub_Sub_Category_ID',$cat_arr[2])
    //                                                     ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
    //                                                     ->whereIn('Brand', $selBrands)
    //                                                     ->inRandomOrder()->get());
    //                             }else{
    //                                 if($cat_arr[0] == "ALL"){
    //                                         $products =Product::whereBetween('Unit_price', [$minimum_price, $maximum_price]) 
    //                                                             ->whereIn('Brand', $selBrands)
    //                                                             ->inRandomOrder()->get();

    //                                     }else{
    //                                         $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
    //                                                     ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
    //                                                     ->whereIn('Brand', $selBrands)      
    //                                                     ->inRandomOrder()->get());
    //                                     }
    //                             }
    //             }

            
    //         }
    //         else{
    //                 if($brandCount == 0){

                    

    //                     if(count($cat_arr) == 2){

    //                         $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
    //                                             ->where('Sub_Category_ID',$cat_arr[1])
    //                                             ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
    //                                             ->whereIn('colour', $selColours)
    //                                             ->inRandomOrder()->get());
    //                     }else if(count($cat_arr) == 3){

    //                             $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
    //                                             ->where('Sub_Category_ID',$cat_arr[1])
    //                                             ->where('Sub_Sub_Category_ID',$cat_arr[2])
    //                                             ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
    //                                             ->whereIn('colour', $selColours)
    //                                             ->inRandomOrder()->get());
    //                     }else{
    //                         if($cat_arr[0] == "ALL"){
    //                                 $products =Product::whereBetween('Unit_price', [$minimum_price, $maximum_price])
    //                                                     ->whereIn('colour', $selColours)
    //                                                     ->inRandomOrder()->get();

    //                             }else{
    //                                 $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
    //                                             ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
    //                                             ->whereIn('colour', $selColours)      
    //                                             ->inRandomOrder()->get());
    //                             }
    //                     }
    //                 }else{
    //                                 if(count($cat_arr) == 2){

    //                                         $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
    //                                                             ->where('Sub_Category_ID',$cat_arr[1])
    //                                                             ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
    //                                                             ->whereIn('colour', $selColours)
    //                                                             ->whereIn('Brand', $selBrands)
    //                                                             ->inRandomOrder()->get());
    //                                     }else if(count($cat_arr) == 3){

    //                                             $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
    //                                                             ->where('Sub_Category_ID',$cat_arr[1])
    //                                                             ->where('Sub_Sub_Category_ID',$cat_arr[2])
    //                                                             ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
    //                                                             ->whereIn('colour', $selColours)
    //                                                             ->whereIn('Brand', $selBrands)
    //                                                             ->inRandomOrder()->get());
    //                                     }else{
    //                                         if($cat_arr[0] == "ALL"){
    //                                                 $products =Product::whereBetween('Unit_price', [$minimum_price, $maximum_price])
    //                                                                     ->whereIn('colour', $selColours)
    //                                                                     ->whereIn('Brand', $selBrands)
    //                                                                     ->inRandomOrder()->get();

    //                                             }else{
    //                                                 $products = $products->merge(Product::where('Category_ID',$cat_arr[0])
    //                                                             ->whereBetween('Unit_price', [$minimum_price, $maximum_price])
    //                                                             ->whereIn('colour', $selColours) 
    //                                                             ->whereIn('Brand', $selBrands)     
    //                                                             ->inRandomOrder()->get());
    //                                             }
    //                                     }


    //                     }

    //         }

    //     }

    //     foreach($products as $product ){
    //         $isFavourite = $product->IsAddedAsFavourite();
    //         $isaddedToCart = $product->IsItemAddedtoCart();
    //         $product['addedAsFavourite'] = $isFavourite;
    //         $product['addedToCart'] = $isaddedToCart;
    //     }
       
    //     $Unique_List = $products->unique('Product_id')->all();
    //     // $Unique_List =collect($unique_productList)->paginate(5);
    //     // $Unique_List= $Unique_List->paginate(5);
    //     // foreach($Unique_List as $product ){
    //     //     $isFavourite = $product.IsAddedAsFavourite();
    //     //     $isaddedToCart = $product.IsItemAddedtoCart();
    //     //     $product.addedAsFavourite => $isFavourite;
    //     //     $product.addedToCart => $isaddedToCart;
    //     // }
    //     return response(array(
    //         'success' => true,
    //         'products'=>$Unique_List,
    //         'message' => "Category Fetched."
    //     ),201,[]);

    // }
    

    public function CategoryDetailsFetch(){
        $selCategory = request('selectedCat');
        $Type = request('Type');
        $subCategories="";
        $Brands="";
        $colours="";
        if(strcmp($Type , "Category") == 0){
            if(strcmp($selCategory , "") != 0){
                $subCategories = Category::find($selCategory)->SubCategories;
            
                foreach ($subCategories as $sub) {
                    $subsubCategories = $sub->SubSubCategories($sub->Category_ID,$sub->Sub_Category_ID);
                    $sub['SubsubCat'] = $subsubCategories;
                # code...
                }

            }

             
        }else if(strcmp($Type , "Brand") == 0){
                $Brands = DB::select('select * from brand');
        }else if(strcmp($Type , "Colour") == 0){
                $colours = DB::select('select * from colours');
        
        }
        return response(array(
            'success' => true,
            'subCategories'=>$subCategories,
            'Brands' => $Brands,
            'Colours' => $colours,
            'Type' => $Type
        ),201,[]);
       // return $subCategories;
    }


   


    
}
