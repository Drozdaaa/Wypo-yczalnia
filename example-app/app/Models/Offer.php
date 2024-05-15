<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','description','engine','macihne_id'];
    public $timestamps = false;
    public function machines(): HasMany{
        return $this->hasMany(Machine::class);
    }
}
