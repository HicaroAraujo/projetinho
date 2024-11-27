<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carro extends Model
{
    protected $fillable =
    [
       'year',
       'model',
       'brand'
    ];

    public function dono():HasMany
    {
        return $this->HasMany(Dono::class);
    }
}
