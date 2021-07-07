<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryStoryName;
use App\Models\ListStory;
use App\Models\Novel;
use App\Models\StoryName;
use App\Models\StoryNameNovel;
use Illuminate\Http\Request;

class StoryNameController extends Controller
{
    public function index()
    {
        $storyNames = StoryName::orderBy('id', 'desc')->paginate(10);

        return view('backend.storyNames.list', compact('storyNames'));
    }

    public function create()
    {
        $categories = Category::all();
        $listStorys = ListStory::all();

        return view('backend.storyNames.create', compact('categories', 'listStorys'));
    }

    public function store(Request $request)
    {
        $storyNames = new StoryName();
        $storyNames->fill($request->all());
        $storyNames->save();

        $arr = [];
        if (is_array($request->category_id) && count($request->category_id) > 0) {
            foreach ($request->category_id as $c) {
                $arr[] = array(
                    'category_id' => $c,
                    'story_name_id' => $storyNames->id,
                );
            }
        }
        CategoryStoryName::insert($arr);

        return redirect()->route('storyNames.index');
    }

    public function edit($id)
    {
        $storyNames = StoryName::findOrFail($id);
        $categories = Category::all();
        $novels = Novel::where('name', '=', $storyNames->name);
        $listStorys = ListStory::all();

        return view('backend.storyNames.edit', compact('categories', 'novels', 'listStorys', 'storyNames'));
    }

    public function update(Request $request, $id)
    {
        $storyNames = StoryName::findOrFail($id);
        $storyNames->fill($request->all());
        $storyNames->save();

        $arr = [];
        if (is_array($request->category_id) && $request->category_id > 0) {
            array_push([
                'category_id' => $request->category_id,
                'story_name_id' => $storyNames->id,
            ]);
        }
        CategoryStoryName::insert($arr);

        $array = [];
        if (is_array($request->novel_id) && $request->novel_id > 0) {
            array_push([
                'novel_id' => $request->novel_id,
                'story_name_id' => $storyNames->id,
            ]);
        }
        StoryNameNovel::insert($array);

        return redirect()->route('storyNames.index');
    }

    public function destroy($id)
    {
        $storyNames = StoryName::findOrFail($id);
        $storyNames->delete();
        return redirect()->route('storyNames.index');
    }

    public function show($id)
    {
        $storyNames = StoryName::findOrFail($id);
        foreach ($storyNames->story_name_novels as $storyNovels) {
            if ($storyNames->id == $storyNovels->story_name_id) {
                $storyNovels = StoryNameNovel::orderBy('id', 'desc')
                    ->where('story_name_id', '=', $storyNames->id)
                    ->paginate(10);
                return view('backend.storyNames.detail', compact('storyNames', 'storyNovels'));
            }
        }

        return view('backend.storyNames.detail', compact('storyNames'));
    }
}
