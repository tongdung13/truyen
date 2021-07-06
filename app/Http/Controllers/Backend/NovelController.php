<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\NovelRequest;
use App\Models\Novel;
use Illuminate\Http\Request;

class NovelController extends Controller
{
    public function index()
    {
        $novels = Novel::orderBy('id', 'desc')->paginate(10);

        return view('backend.novels.list', compact('novels'));
    }

    public function create()
    {
        return view('backend.novels.create');
    }

    public function store(NovelRequest $request)
    {
        $novels = new Novel();
        $novels->fill($request->all());
        $novels->save();

        return redirect()->route('novels.index');
    }

    public function edit($id)
    {
        $novels = Novel::findOrFail($id);
        return view('backend.novels.edit', compact('novels'));
    }

    public function update(NovelRequest $request, $id)
    {
        $novels = Novel::findOrFail($id);
        $novels->fill($request->all());
        $novels->save();

        return redirect()->route('novels.index');
    }

    public function destroy($id)
    {
        $novels = Novel::findOrFail($id);
        $novels->delete();

        return redirect()->route('novels.index');
    }

    public function show($id)
    {
        $novels = Novel::findOrFail($id);

        return view('backend.novels.detail', compact('novels'));
    }
}
