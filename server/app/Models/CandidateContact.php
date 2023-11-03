<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateContact extends Model
{
    use HasFactory;
    protected $table = 'candidate_contact';
    protected $fillable = ['id','del_flag','candidate_id','contact_id','value','created_by','modified_by','created_at','updated_at'];
}
