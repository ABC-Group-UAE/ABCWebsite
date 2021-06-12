<?php

namespace App;
use App\Category;
use App\SubCategory;
use App\SubSubCategory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Product extends Model
{
    //
    public $timestamps = true;
    public $primaryKey = 'Product_id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];
    Public $addedAsFavourite = "false";
    Public $addedToCart = "false";

    public function categories(){
        return $this->belongsTo(Category::class,'Category_ID','Category_ID');
    }
    public function Subcategories(){
        return $this->belongsTo(SubCategory::class,'Sub_Category_ID','Sub_Category_ID');
    }
    public function Sub_subcategories(){
        return $this->belongsTo(SubSubCategory::class,'Sub_Sub_Category_ID','Sub_Sub_Category_ID');
    }

    public function presentPrice()
    {
        
         if ($this->Unit_price<0) return "-".presentPrice(-$this->Unit_price);
         return 'AED ' . number_format($this->Unit_price, 2);
        
       // return money_format('$%i', $this->price / 100);
    }

    // public function scopeMightAlsoLike($query)
    // {
    //     return $query->inRandomOrder()->take(4);
    // }
    public function IsAddedAsFavourite(){
        $wish_list = app('wishlist');
        $Item = $wish_list->get($this->Product_id);
        if(is_null($Item)){
            return false;
        }else{
            return true;
        }
        
    }
    public function IsItemAddedtoCart(){
        if(Session::has('id')){
            $SId = Session::get('id');
        }else{
            Session::put('id',  rand());
            $SId = Session::get('id');
        }
        // $cart = \Cart::session($SId)->getContent();
        $Item =\Cart::session($SId)->getContent()->get($this->Product_id);
        if(is_null($Item)){
            return false;
        }else{
            return true;
        }

        // return true;
        
    }
}
