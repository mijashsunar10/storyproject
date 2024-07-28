<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'category',
        'slug',
        'description',
    ];
    public function storydetails()
    {
        return $this->hasMany(Storydetails::class);
    }
    public function stories()
    {
        return $this->hasMany(StoryDetails::class);
    }
}
