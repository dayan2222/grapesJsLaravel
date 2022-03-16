<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saveData extends Model
{
    use HasFactory;

    protected $fillable = [
        'storeJSON',
        'gjs_css'
    ];
}
