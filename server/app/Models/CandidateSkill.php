<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateSkill extends Model
{
    use HasFactory;
    protected $table = 'candidate_skill';
    protected $fillable = ['id','del_flag','candidate_id','skill_id','created_by','modified_by','created_at','updated_at'];
}
