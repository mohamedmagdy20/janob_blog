<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
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
        'likes',
        'rec',
        'date',
        'created_at'
    ];

    public function comment()
    {
        return $this->hasMany(Comment::class,'article_id');
    }
    
}
