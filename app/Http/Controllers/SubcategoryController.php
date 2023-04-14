<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index(){
        $subCategory = new Subcategory();
        return view('subcategories')->with(['subcategories' => $subCategory->all()]);
    }
}
