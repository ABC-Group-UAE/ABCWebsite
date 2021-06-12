<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\SubCategory;
use App\SubSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    //
    function indexlogin(Request $req){ 
        $colours = DB::select('select * from colours');
        $Brands = DB::select('select * from brand');
        $Categories = Category::get();
        $SelectedCategory ="ALL";
        if ($req->has('selCategory')) {
            $SelectedCategory = $req->get('selCategory');
        } 
        // return view('Admin.productEntry')->with([
            
        //     'Categories' => $Categories,
        //     'selectedCatValue' => $SelectedCategory,
        //     'colours' => $colours,
        //     'Brands' =>$Brands
        //     // 'fromValue' => 'Product',
        //     // 'page' => $page
        // ]);

        return view('Admin.Entrytestlayout')->with([
            
                 'Categories' => $Categories,
                 'selectedCatValue' => $SelectedCategory,
                 'colours' => $colours,
                 'Brands' =>$Brands
                 // 'fromValue' => 'Product',
                 // 'page' => $page
             ]);
    }
    function SaveProduct(Request $req){
         $newProduct = new Product; 
         $newProduct->Product_id = $req->get('productId');
         $newProduct->FamilyCode = $req->get('Familycode');
         $newProduct->Category_ID = $req->get('Category');
         $newProduct->Sub_Category_ID = $req->get('subCategory');
         $newProduct->Sub_Sub_Category_ID = $req->get('subsubCategory');
         $newProduct->product_name = $req->get('productName');
         $newProduct->shape = $req->get('shape');
         $newProduct->colour = $req->get('colour');
         $newProduct->size = $req->get('size');
         $newProduct->description = $req->get('productDescription');
         $newProduct->long_description = $req->get('productlongDescription');
         $newProduct->Finish = $req->get('finish');
         $newProduct->material = $req->get('material');
         $newProduct->unit_in_stock = 100;
         $newProduct->Thickness = $req->get('thickness');
         $newProduct->Dimension = $req->get('size');
         $newProduct->outlet_diameter = $req->get('outDiameter');
        //  $newProduct->Available_variance = $req->get('Available_variance');
         $newProduct->Brand = $req->get('brand');
         $newProduct->Unit_of_measurement = $req->get('UoM');
         $newProduct->Unit_price = $req->get('price');
         $newProduct->Unit_price = $req->get('price');
         $newProduct->Application = $req->get('application');
         dd($newProduct);   
         $newProduct->save();
        

    }
    function getSubCategoryDetails(Request $req){
        $selectedCategory =$req->get('selectedcategory');
        $subCategories = Category::find($selectedCategory)->SubCategories;
        return response(array(
            'success' => true,
            'SubCategories'=>$subCategories,
            'message' => "Category Fetched."
        ),201,[]);
    }
    function getSubSubCategoryDetails(Request $req){
        $selectedCategory =$req->get('selectedcategory');
        $selectedSubCategory =$req->get('selectedsubcategory');
        // $subCategory = SubCategory::where('Category_ID','=',$selectedCategory)
        //                             ->where('Sub_Category_ID','=',$selectedSubCategory)
        //                             ->get();
        $subSubCategories = SubSubCategory::where('Category_ID',$selectedCategory)
                                            ->Where('Sub_Category_ID', $selectedSubCategory)
                                            ->get();
        // $subSubCategories = $subCategory->SubSubCategories($selectedCategory,$selectedSubCategory);
        return response(array(
            'success' => true,
            'SubSubCategories'=>$subSubCategories,
            'message' => "Category Fetched."
        ),201,[]);
    }
}
