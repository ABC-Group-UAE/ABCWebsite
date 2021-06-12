<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
  
    public $timestamps = true;
    public $primaryKey = ['Category_ID','Sub_Category_ID'];
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['Category_ID',
                            'Sub_Category_ID',
                            'Sub_Category_Name',
                            'Description',
                            'Status'
                            ];
     public  function SubSubCategories($Category_ID,$Sub_Category_ID){
        // return $this->hasMany(SubSubCategory::class,'Category_ID',$this->Sub_Category_ID)
        //              ->Where('Sub_Category_ID', $this->Sub_Category_ID);
          // return $this->hasMany(SubSubCategory::class,'Category_ID','Category_ID')
          //              ->where('Category_ID',$this->Category_ID)
          //              ->Where('Sub_Category_ID', $this->Sub_Category_ID);
        $subsubCategories = SubSubCategory::where('Category_ID',$Category_ID)
                                            ->Where('Sub_Category_ID', $Sub_Category_ID)
                                            ->get();
                     return $subsubCategories;
    }
     public function Category(){
        return $this->belongsTo(Category::class,'Category_ID','Category_ID');
                     
                     
    }
}
