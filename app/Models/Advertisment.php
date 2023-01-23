<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisment extends Model
{
    use HasFactory;
    protected $table = 'advertisment';
    protected $fillable = [
        'title',
        'body',
        'date_from',
        'date_to',
        'rec',
        'img'
    ];
}
