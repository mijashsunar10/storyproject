<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storydetails extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title',
        'description',
        'main_characters',
        'author',
        'category_id',
        'image',
        'user_id',
        'audience',
        'language',
        'copyright',
    ];

    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}
