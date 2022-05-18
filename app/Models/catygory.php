<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catygory extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'slug',
        'desciption',
        'status',
        'popular',
        'image',
        'meta_title',
        'meta_descipt',
        'meta_keywords',9
    ];
}
