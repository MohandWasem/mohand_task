<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class details_login extends Model
{
    use HasFactory;
    protected $fillable=[
         "id_user","num_of_login","date_login","date_logout","id"
    ];
    public $timestamps = false;
    
}
