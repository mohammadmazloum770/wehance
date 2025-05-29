<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
     protected $fillable = [
        
        'title',
        'image',
        'category_id',
        'action',
        
       
    ];
     protected $appends = ['image_url'];

    public function getCategory()
    {
        return $this->belongsTo(BlogCategory::class, 'category', 'id');

    }
      public function getImageUrlAttribute()
    {
        return asset('uploads/' . $this->image);
    }
}
