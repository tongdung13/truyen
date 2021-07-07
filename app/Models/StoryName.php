<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryName extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'list_story_id',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_story_names', 'story_name_id', 'category_id');
    }

    public function novels()
    {
        return $this->belongsToMany(Novel::class, 'story_name_novels', 'novel_id', 'story_name_id');
    }

    public function list_story()
    {
        return $this->belongsTo(ListStory::class);
    }

    public function category_story_names()
    {
        return $this->hasMany(CategoryStoryName::class);
    }

    public function story_name_novels()
    {
        return $this->hasMany(StoryNameNovel::class);
    }
}
