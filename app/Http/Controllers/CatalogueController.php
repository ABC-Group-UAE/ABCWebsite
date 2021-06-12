<?php

namespace App\Http\Controllers;

use App\catalogue;
use Illuminate\Http\Request;
use App\Category;
use App\Models\page;
use Illuminate\Support\Facades\Session;
class CatalogueController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(! Session::has('id')){
            Session::put('id',  rand());
        }
        $categories = Category::all();
        $catalogues = [];
        foreach($categories as $category){
            $cataloguesS = catalogue::all()->where('category_ID',$category->Category_ID);
            array_push($catalogues, $cataloguesS);
        }
        
        //return $catalogues;
        $page = page::findorfail(8);
        return view('download')->with(['catalogues'=>$catalogues, 'page'=> $page]);
    }
    public function downloadpdf($lang,$filename){
        $headers = array(
                      'Content-Type' => 'application/pdf',
                    );
        $file_path = public_path()."/abccontentbucket.s3.me-south-1.amazonaws.com/Catalogues/".$filename;
        // return $file_path;
        return response()->download($file_path,$filename,$headers);
        
     }

    
   
}
