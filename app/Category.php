<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $timestamps = true;
    public $primaryKey = 'Category_ID';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['Category_ID',
                            'Category_Name',
                            'Description',
                            'Status'
                            ];



    public function SubCategories(){
        return $this->hasMany(SubCategory::class,'Category_ID','Category_ID');
    }

    

    
}
