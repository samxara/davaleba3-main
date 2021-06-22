<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Posts extends Model
{
    protected $fillable = [
        'title',
        'author_name',
        'post_text'
    ];


    use HasFactory;

}
