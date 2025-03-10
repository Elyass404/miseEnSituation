<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view("categories.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        Article::create([
            "title"=>$request->title,
            "category_id"=>$request->category_id,
            "description"=>$request->description,

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Article::find($id);
        return view("categories.show", compact("category"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Article::find($id);
        return view("categories.edit", compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::find($id);
        $article->update([
            "title"=>$request->title,
            "category_id"=>$request->category_id,
            "description"=>$request->description,
        ]);

        return redirect("categories.index")->with('success',"The Category has been updated with success!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);
        $article->delete($id);

        return redirect("categories.index")->with('success',"The category has been deleted with success!");
    }
}
