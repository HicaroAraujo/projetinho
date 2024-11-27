<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dono extends Model
{
    protected $fillable =
    [
        'name',
        'id_carro'
    ];

    public function carro():BelongsTo
    {
        return $this->belongsTo(Carro::class);
    }
}
