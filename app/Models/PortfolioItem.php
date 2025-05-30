<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'description',
        'category_id',
        'client',
        'website',
    ];
    protected $appends = ['image_url'];



    public function category(){
        return $this->belongsTo(Category::class);
    }
   

    public function getImageUrlAttribute()
    {
        return asset('uploads/' . $this->image);
    }


}
