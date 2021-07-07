<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryNameNovel extends Model
{
    use HasFactory;

    protected $fillable = [
        'novel_id',
        'story_name_id',
    ];

    public function story_name()
    {
        return $this->belongsTo(StoryName::class);
    }

    public function novel()
    {
        return $this->belongsTo(Novel::class);
    }
}
