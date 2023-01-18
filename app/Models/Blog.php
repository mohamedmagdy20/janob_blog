<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $fillable =[
        'title',
        'body',
        'type',
        'img',
        'file',
        'likes'
    ];
    
}
