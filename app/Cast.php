<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cast extends Model
{
    //
    // use HasFactory;

    protected $fillable = [
        'nama', 'umur', 'bio'
    ];
}
