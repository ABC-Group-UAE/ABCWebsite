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


class locationController extends Controller
{
    //
    function showrooms(){
        if(! Session::has('id')){
            Session::put('id',  rand());
        }
        
        $countries=location::select('country')->distinct()->get();
        $location=location::all();
        // $page = page::findorfail(12);,'page'=>$page
        return view('globalpresence',['countries'=>$countries,'locations'=>$location]);
    }
    function locations(){
        if(! Session::has('id')){
            Session::put('id',  rand());
        }
        
        $countries=location::select('country')->distinct()->get();
        $location=location::all();
        // $page = page::findorfail(12);,'page'=>$page
        return view('pages.locations',['countries'=>$countries,'locations'=>$location]);
    }
    function locationfilter(Request $request){
            $country_name=$request->input('country_name');
            $location_info=location::where('country', '=', $country_name)     
                            ->get();
            return $location_info;
    }
}
