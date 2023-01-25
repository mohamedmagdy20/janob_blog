<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\Images;
use App\Models\Files;
class Blog extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $fillable =[
        'id',
        'title',
        'body',
        'type',
        'img',
        'file',
        'likes',
        'rec',
        'date',
        'isStatic',
        'created_at'
    ];

    public function comment()
    {
        return $this->hasMany(Comment::class,'article_id');
    }

    
    public function images()
    {
        return $this->hasMany(Images::class);
    }

    public function files()
    {
        return $this->hasMany(Files::class);
    }
    
}
