<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private Category $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index(){
        return view('categories')->with(['categories' => $this->category->all()]);
    }

    public function show($category_id){
        $subcategories = $this->category->find($category_id)->subcategories->all();
        return view('subcategories')->with(['subcategories' => $subcategories, 'categoryName' => $this->category->find($category_id)->name]);
    }
}
