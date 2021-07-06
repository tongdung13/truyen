<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListStory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function story_names()
    {
        return $this->hasMany(StoryName::class);
    }
}
