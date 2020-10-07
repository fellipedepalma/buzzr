<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories.index')->with('categories', Category::all());
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        session()->flash('success', 'Categoria criada com sucesso!');
        return redirect(route('categories.index'));
    }

    public function show($id)
    {
        return response()->json(Category::find($id));
    }

    public function edit($id)
    {
        return view('categories.edit')->with('category', Category::find($id));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update([
            'name' => $request->name
        ]);
        session()->flash('success', 'Categoria atualizada com sucesso!');
        return redirect(route('categories.index'));
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('success', 'Categoria foi removida com sucesso!');
        return redirect(route('categories.index'));
    }
}
