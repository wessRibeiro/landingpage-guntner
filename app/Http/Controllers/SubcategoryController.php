<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function show($subcategory_id){
        $items = Subcategory::find($subcategory_id)->items->all();
        return view('items')->with([
            'items' => $items,
            'subCategoryName' => Subcategory::find($subcategory_id)->name,
            'categoryName' => Subcategory::find($subcategory_id)->category->name
        ]);
    }
}
