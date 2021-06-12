<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    //
    public $timestamps = true;
    public $primaryKey = ['Category_ID','Sub_Category_ID','Sub_Sub_Category_ID'];
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['Category_ID',
                            'Sub_Category_ID',
                            'Sub_Sub_Category_ID',
                            'Sub_Sub_Category_Name',
                            'Description',
                            'Status'
                            ];
}
