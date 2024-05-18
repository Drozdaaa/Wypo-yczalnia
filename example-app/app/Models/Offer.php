<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','description','engine','machine_id'];
    public $timestamps = false;

    public function machine(): BelongsTo{
        return $this->belongsTo(Machine::class);
    }

}
