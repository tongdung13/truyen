<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Novel;
use App\Models\StoryName;
use App\Models\StoryNameNovel;
use Illuminate\Http\Request;

class StoryNameNovelController extends Controller
{
    public function index()
    {
        $storyNovels = StoryNameNovel::orderBy('id', 'desc')->paginate(10);

        return view('backend.storyNames.detail', compact('storyNovels'));
    }

    public function create($id)
    {
        $storyNames = StoryName::findOrFail($id);
        $novels = Novel::where('name', $storyNames->name)->get();

        return view('backend.storyNovels.create', compact('storyNames', 'novels'));
    }

    public function store(Request $request, $id)
    {
        $array = [];
        if (is_array($request->novel_id) && count($request->novel_id) > 0) {
            foreach ($request->novel_id as $u) {
                $array[] = array(
                    'novel_id' => $u,
                    'story_name_id' => $id
                );
            }
        }
        StoryNameNovel::insert($array);

        return redirect()->route('storyNames.detail', $id);

    }
}
