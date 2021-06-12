<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enquiryModel extends Model
{
    use HasFactory;
protected $table = 'enquired_product';
    public $primaryKey = 'slno';
    protected $guarded =[]; 
     public $timestamps = false;
}
