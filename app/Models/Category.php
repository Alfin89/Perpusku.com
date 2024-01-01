<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    
    public $timestamps = true;
    protected $table = 'categories';
    protected $fillable = [ 'name', 'image', ''];

    // public function getCreatedAtAttribute($date)
    // {
    //     return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    // }

    // public function getUpdatedAtAttribute($date)
    // {
    //     return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    // }
}
