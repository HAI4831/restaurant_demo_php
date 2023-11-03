<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;
    protected $table = 'configuration';
    protected $fillable = ['id','del_flag','value','description',
    'type','created_at','updated_at',];
}