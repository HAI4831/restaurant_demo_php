<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;
    protected $table = 'interview';
    protected $fillable = ['id', 'del_lag','status','evaluation',
'candidate_id','position_id','date','note ','created_by' ,
'modified_by','created_at' ,'updated_at', ];
   
}
