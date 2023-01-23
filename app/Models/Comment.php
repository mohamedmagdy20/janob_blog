<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;
class Comment extends Model
{
    use HasFactory;
    protected $table ='comment';
    protected $fillable = [
        'body',
        'article_id'
    ];
    
    public function blog()
    {
        return $this->belongsTo(Blog::class,'article_id');
    }

}
