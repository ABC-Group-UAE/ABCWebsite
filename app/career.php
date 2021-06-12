<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class career extends Model
{
    //
    public $timestamps = true;
    public $primaryKey = 'Candidate_mailid';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['Candidate_Name',
                            'Candidate_mailid',
                            'jobPosition',
                            'coverletter',
                            'resume'];
}
