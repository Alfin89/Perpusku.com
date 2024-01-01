<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $fillable = [
        'title',
        'description',
        'cate_id',
        'quantity',
        'file',
        'cover',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }
}
