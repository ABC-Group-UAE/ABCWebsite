<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    Public $CustomerName, $customer_mailid , $mobile , $type_of_enquiry , $message;
}
