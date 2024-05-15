<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;
    protected $fillable = ['brand','model','type','production_year','technical_condition','availability'];

    public $timestamps = false;
    

}
