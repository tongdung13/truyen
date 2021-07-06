<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'chapter',
        'content',
    ];

    public function story_names()
    {
        return $this->belongsToMany(StoryName::class, 'story_name_novels', 'novel_id', 'story_name_id');
    }

    public function story_name_novels()
    {
        return $this->hasMany(StoryNameNovel::class);
    }
}
