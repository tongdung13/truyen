<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryStoryName extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'story_name_id',
    ];

    public function story_name()
    {
        return $this->belongsTo(StoryName::class);
    }
}
