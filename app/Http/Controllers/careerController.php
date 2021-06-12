<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\career;
use App\Models\newsletter;
use App\Models\location;
use App\Models\contact;
use DB;
use App\Product;
use App\Category;
use App\RelatedProduct;
use Illuminate\Support\Collection;
use App\Models\page;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
class careerController extends Controller
{
    
    //
 public function indexlaunch(){
    if(! Session::has('id')){
        Session::put('id',  rand());
    }
    // $page = page::findorfail(1);
    return view('index');
 }
    public function indexhome(){
                if(! Session::has('id')){
                    Session::put('id',  rand());
                }
                $page = page::findorfail(1);
                return view('home')->with('page',$page);
    }
    public function index(){
        return redirect()->route('careers',app()->getlocale());
    }
    public function file_upload(Request $req){
       
      $attributes= request()->validate([
        'Candidate_Name'=>'required  ',
        'Candidate_mailid'=>'required  | email',
        'jobPosition'=>'required ' ,
        'coverletter'=>'required ' ,
        'resume'=>'required ' 
    ]);
    career::create($attributes);
    $path = $req->file('resume')->getRealPath();
    $target_dir = "resumes/";
    $fileName = time().'.'.$req->file('resume')->extension();  
   
    $req->file('resume')->move(public_path('resumes'), $fileName);
    $path = public_path('resumes').'/'.$fileName;
    //$name= $req->file('resume')->getClientOrginalName();
   // $path = $req->file('resume')->getClientOrginalName()->store('resumes');
   // dd($path,$name);
    // $realPath = storage_path($req->file('resume'));
    //$realPath = public_path(). '/' . $path;
    //  . '/' . $path;
   
    $career = career::find($req->Candidate_mailid);
    $msg ="Thank you ".$req->Candidate_Name." We received your application";
    // hr@abcmercantile.ae
    \Mail::to('hr@abcmercantile.ae')->send(new \App\Mail\careerMail($career,$path));
    //   \Mail::to('branding@abcmercantile.ae')->send(new \App\Mail\careerMail($career,$path));
    return  redirect()->route('indexCareer',app()->getlocale())->with('message1', $msg);
   
    }

    public function subscribeNewsLetter(Request $req){
        try{
            $mailid = request('mailid');
         // $mailid = $req->get('Mailid');
         $newsletter = new newsletter;
        // return $mailid;
         $newsletter->subscriberID = rand();
         $newsletter->SubscriberMailid = $mailid;
         $newsletter->save();
         // $newsletterId = newsletter::find($mailid);
         \Mail::to($mailid)->send(new \App\Mail\newslettermail($newsletter));
          return "Successfully Subscribed";
        }catch(Throwable $e){
            return "Please click on the newsletter icon to subscribe";
        }
        
       
    }
    // function showrooms(){
    //     if(! Session::has('id')){
    //         Session::put('id',  rand());
    //     }
        
    //     $countries=location::select('country')->distinct()->get();
    //     $location=location::all();
    //     // $page = page::findorfail(12);,'page'=>$page
    //     return view('globalpresence',['countries'=>$countries,'locations'=>$location]);
    // }
    // function locations(){
    //     if(! Session::has('id')){
    //         Session::put('id',  rand());
    //     }
        
    //     $countries=location::select('country')->distinct()->get();
    //     $location=location::all();
    //     // $page = page::findorfail(12);,'page'=>$page
    //     return view('pages.locations',['countries'=>$countries,'locations'=>$location]);
    // }
    // function locationfilter(Request $request){
    //         $country_name=$request->input('country_name');
    //         $location_info=location::where('country', '=', $country_name)     
    //                         ->get();
    //         return $location_info;
    // }

    public function ContactUs(Request $request){
        $name=$request->input('name');
        $mailid =$request->input('email');
        $mobile = $request->input('PhNo');
        $TypeofEnquiry=$request->input('TypeofEnquiry');
        $message = $request->input('message');
        $contact = new contact;
        $contact->CustomerName = $name;
        $contact->customer_mailid =$mailid;
        $contact->mobile = $mobile;
        $contact->type_of_enquiry =  $TypeofEnquiry;
        $contact->message = $message;
        \Mail::to($mailid)->send(new \App\Mail\contactmail($contact));
       // return "Successfully Subscribed";
       $page = page::findorfail(1);
        return redirect()->route('home',app()->getlocale())->with('page',$page);


    }
    function autosearch(Request $request){
        $searched=$request->input('SearchProduct');
        //$query=Products::select('name')->get();  
        // $query = DB::table('products')
                    
        //             ->select('*')
        //             ->where('Category_Name', 'like', $searched.'%')
        //             ->orWhere('Category_Name', 'like', '% '.$searched.'%')
        //             ->orWhere('Sub_Category_Name', 'like', $searched.'%')
        //             ->orWhere('Sub_Category_Name', 'like', '% '.$searched.'%')
        //             ->orWhere('Sub_Sub_Category_Name', 'like', $searched.'%')
        //             ->orWhere('Sub_Sub_Category_Name', 'like', '% '.$searched.'%')
        //             ->orWhere('product_name', 'like', $searched.'%')
        //             ->orWhere('product_name', 'like', '% '.$searched.'%')
        //             ->orWhere('Brand', 'like', $searched.'%')
        //             ->orWhere('Brand', 'like', '% '.$searched.'%')
                   
        //             ->get();
        $query = DB::table('products')
                    ->join('categories', function($join)
                        {
                            $join->on('products.Category_ID', '=',  'categories.Category_ID');
                            
                        })
                    ->join('sub_categories', function($join)
                        {
                            $join->on('products.Category_ID', '=',  'sub_categories.Category_ID');
                            $join->on('products.Sub_Category_ID', '=',  'sub_categories.Sub_Category_ID');
                        })
                    ->join('sub_sub_categories', function($join)
                        {
                            $join->on('products.Category_ID', '=',  'sub_sub_categories.Category_ID');
                            $join->on('products.Sub_Category_ID', '=',  'sub_sub_categories.Sub_Category_ID');
                            $join->on('products.Sub_Sub_Category_ID', '=',  'sub_sub_categories.Sub_Sub_Category_ID');
                        })
                    ->select('*')
                    ->where('Category_Name', 'like', $searched.'%')
                    ->orWhere('Category_Name', 'like', '%'.$searched.'%')
                    ->orWhere('Sub_Category_Name', 'like', $searched.'%')
                    ->orWhere('Sub_Category_Name', 'like', '%'.$searched.'%')
                    ->orWhere('Sub_Sub_Category_Name', 'like', $searched.'%')
                    ->orWhere('Sub_Sub_Category_Name', 'like', '%'.$searched.'%')
                    ->orWhere('product_name', 'like', $searched.'%')
                    ->orWhere('product_name', 'like', '%'.$searched.'%')
                    ->orWhere('Brand', 'like', $searched.'%')
                    ->orWhere('Brand', 'like', '%'.$searched.'%')
                    ->get();
                    // ->pluck('Product_id');
         return $query;
    }
    function SearchFilter(Request $request){
        $searched=$request->input('SearchProduct');
        $From = $request->input('From');
        $filterType="";
        $filtervalues="";
        if(strcmp($From,"mobile") == 0){
            $filterType=$request->input('filtertype1');
            $filtervalues=$request->input('filter-values1');
        }else{
            $filterType=$request->input('filtertype');
            $filtervalues=$request->input('filter-values');
        }
        
        $colours = DB::select('select * from colours');
        $Brands = DB::select('select * from brand');
        $Categories = Category::get();
        if(((strcmp($filterType,"type") == 0)&&(strcmp($filtervalues,"NoItem") == 0))||((strcmp($filterType,"") == 0)&&(strcmp($filtervalues,"") == 0))){
            $products =Product::inRandomOrder()->get();
            $page = page::findorfail(5);
            return view('product.Explore')->with([
                'products' => $products,
                'Categories' => $Categories,
                'selectedCatValue' => "ALL-",
                'colours' => $colours,
                'Brands' =>$Brands,
                'fromValue' => 'Product',
                'message' => 'We couldn’t find what you were looking for\\n We have so many other products that you will like!',
                'page' => $page
                
            ]);
        }

        if(strcmp($filterType,"description") == 0){
            $product =Product::findorfail($filtervalues);
            $Related_Products = RelatedProduct::RelatedProducts($filtervalues);
            $mightAlsoLike = Product::where('Product_id', '!=', $filtervalues)
                                    ->where('Category_ID','=',$product->Category_ID)
                                    ->inRandomOrder()
                                    ->take(20)
                                    ->get();
           // return $mightAlsoLike;
           $page = page::findorfail(4);
            return view('product.Description')->with([
                'product' => $product,
                'relatedProducts' => $Related_Products,
                'mightAlsoLike' => $mightAlsoLike,
                'fromValue' => 'Product',
                'page'=>$page
            ]);
        }
        elseif(strcmp($filterType,"Category") == 0){
            $filteroptions =explode('-', $filtervalues);
            $SelectedCategory = $filteroptions[1];
            if(strcmp($SelectedCategory,"") != 0){
                $products =Product::where('Category_ID',$SelectedCategory)->inRandomOrder()->get();
            }
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

        }
        elseif(strcmp($filterType,"Sub_Category") == 0){
            $filteroptions =explode('-', $filtervalues);
            $SelectedCategory = $filteroptions[1];
            $SelectedSubCategory = $filteroptions[2];
            if((strcmp($SelectedCategory,"") != 0) && (strcmp($SelectedSubCategory,"") != 0)){
                $products =Product::where('Category_ID',$SelectedCategory)
                                    ->where('Sub_Category_ID',$SelectedSubCategory)
                                        ->inRandomOrder()->get();
            }
            $page = page::findorfail(5);
            return view('product.Explore')->with([
                'products' => $products,
                'Categories' => $Categories,
                'selectedCatValue' => $SelectedCategory,
                'selectedSubCatValue' => $SelectedSubCategory,
                'colours' => $colours,
                'Brands' =>$Brands,
                'fromValue' => 'Product',
                'page' => $page
            ]);

        }
        elseif(strcmp($filterType,"Sub_Sub_Category") == 0){
            $filteroptions =explode('-', $filtervalues);
            $SelectedCategory = $filteroptions[1];
            $SelectedSubCategory = $filteroptions[2];
            $SelectedSubSubCategory = $filteroptions[3];
            if((strcmp($SelectedCategory,"") != 0) && (strcmp($SelectedSubCategory,"") != 0) && (strcmp($SelectedSubSubCategory,"") != 0)){
                $products =Product::where('Category_ID',$SelectedCategory)
                                    ->where('Sub_Category_ID',$SelectedSubCategory)
                                    ->where('Sub_Sub_Category_ID',$SelectedSubSubCategory)
                                    ->inRandomOrder()->get();
            }
            $page = page::findorfail(5);
            return view('product.Explore')->with([
                'products' => $products,
                'Categories' => $Categories,
                'selectedCatValue' => $SelectedCategory,
                'selectedSubCatValue' => $SelectedSubCategory,
                'selectedSubSubCatValue' => $SelectedSubSubCategory,
                'colours' => $colours,
                'Brands' =>$Brands,
                'fromValue' => 'Product',
                'page' => $page
            ]);

        } 
        elseif(strcmp($filterType,"Brand") == 0){
            $products =Product::where('Brand',$filtervalues)
                                ->inRandomOrder()->get();
            $page = page::findorfail(5);
            return view('product.Explore')->with([
                'products' => $products,
                'Categories' => $Categories,
                'colours' => $colours,
                'Brands' =>$Brands,
                'selectedBrand' =>$filtervalues,
                'fromValue' => 'Product',
                'page' => $page
            ]);

        } 
        
        
                    
    }
    function HomeSearchFilter(Request $request){
        
        $filterType=$request->input('filterCat');
        $filtervalue=$request->input('filter-value');
        $colours = DB::select('select * from colours');
        $Brands = DB::select('select * from brand');
        $Categories = Category::get();
        
            
            $SelectedCategory = $filtervalue;
            if(strcmp($SelectedCategory,"") != 0){
                $products =Product::where('Category_ID',$SelectedCategory)->inRandomOrder()->get();
            }
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

        
    }
    function setWhatsAppClickcount(){
        $today = Carbon::today();
        $date="";
        $lastclickedcount=0;
        $status = "false";
        $Existingcount = DB::table('whatsapp_click_count')->orderBy('sl_no', 'desc')->first();
        // foreach($Existingcount as $countRec){
            $date = $Existingcount->date;
            $lastclickedcount = $Existingcount->count;
        // }
        $lastclickeddate = Carbon::parse($date);
        // $date1 = Carbon::createFromFormat('dd-MM-YYYY', $today);
        // $date2 = Carbon::createFromFormat('dd-MM-YYYY', $lastclickeddate);
       // var_dump($date1,$date2);
        if($today->eq($lastclickeddate)){
            // if(strcmp($today,$lastclickeddate)==0){
                // if($date1->eq($date2)){
                   
            DB::table('whatsapp_click_count')->orderBy('sl_no', 'desc')
                ->take(1)
                ->update(['count' => ($lastclickedcount+1)]);
                $status ="success";
        }else{
            DB::table('whatsapp_click_count')->insert(
                array(
                       'count'     =>   1, 
                       'date'   =>   date('Y-m-d H:i:s' , strtotime($today))
                )
           );
           $status ="success";
        }
        return response(array(
            'status' => $status,
            'date1' => $today,
            'date2' => $lastclickeddate,
            'date3' => $date,
            'date4' => $lastclickeddate
        ),201,[]);
        
    }


}
