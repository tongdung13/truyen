<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function story_names()
    {
        return $this->belongsToMany(StoryName::class, 'category_story_names', 'category_id', 'story_name_id');
    }
}
