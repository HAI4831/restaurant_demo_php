<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;
    protected $table = 'team_member';
   protected $fillable = ['id','del_flag','member_id','team_id',
'team_member_role','created_by','modified_by','created_at',
'updated_at',];
}
