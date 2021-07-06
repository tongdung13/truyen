<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(10);
        return view('backend.categories.list', compact('categories'));
    }

    public function create()
    {
        return view('backend.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $categories = new Category();
        $categories->fill($request->all());
        $categories->save();

        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $categories = Category::findOrFail($id);

        return view('backend.categories.edit', compact('categories'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $categories = Category::findOrFail($id);
        $categories->fill($request->all());
        $categories->save();

        return redirect()->route('categories.index');

    }

    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();

        return redirect()->route('categories.index');
    }
}
