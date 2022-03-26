<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saveData extends Model
{
    use HasFactory;

    protected $fillable = [
        'gjs_html',
        'gjs_css',
        'gjs_assets',
        'gjs_styles',
        'gjs_components',
    ];
}
