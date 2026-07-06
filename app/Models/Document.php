<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'title',
        'type',
        'category',
        'sub_type',
        'file_path',
        'year',
        'description',
    ];
}
