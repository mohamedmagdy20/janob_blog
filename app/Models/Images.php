<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $table ='images';
    protected $fillable = [
        'img','blog_id'
    ];

    public function blog()
    {
    
        return $this->belongsTo(Blog::class, 'blog_id');
        
    }
}
