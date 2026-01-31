<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hakdog extends Model
{
    use HasFactory;

    protected $fillable = [
        'sauce',
        'bread',
    ];


}
