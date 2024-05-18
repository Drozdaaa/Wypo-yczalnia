<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Machine extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $attributes = [
            'period' => 6,
    ];
    protected $fillable = ['brand','model','type','production_year','technical_condition','availability'];


    public function offers(): HasMany
    {
        return $this->hasMany(Offer::class);
    }

}
