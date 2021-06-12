<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class catalogue extends Model
{
    //
    public function Categories(){
        return $this->belongsTo(Category::class,'category_ID','Category_ID');
    }
}
