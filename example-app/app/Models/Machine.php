<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Machine extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $attributes = [
            'period' => 6,
    ];
    protected $fillable = ['brand','model','type','production_year','technical_condition','availability'];


    public function country(): BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }

}
