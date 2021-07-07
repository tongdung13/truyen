<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ListStory;
use Illuminate\Http\Request;

class ListStoryController extends Controller
{
    public function index()
    {
        $listStorys = ListStory::orderBy('id', 'desc')->paginate(10);
        return view('backend.listStorys.list', compact('listStorys'));
    }

    public function create()
    {
        return view('backend.listStorys.create');
    }

    public function store(Request $request)
    {
        $listStorys = new ListStory();
        $listStorys->fill($request->all());
        $listStorys->save();

        return redirect()->route('listStorys.index');
    }

    public function edit($id)
    {
        $listStorys = ListStory::findOrFail($id);

        return view('backend.listStorys.edit', compact('listStorys'));
    }

    public function update(Request $request, $id)
    {
        $listStorys = ListStory::findOrFail($id);
        $listStorys->fill($request->all());
        $listStorys->save();

        return redirect()->route('listStorys.index');

    }

    public function destroy($id)
    {
        $listStorys = ListStory::findOrFail($id);
        $listStorys->delete();

        return redirect()->route('listStorys.index');
    }
}
