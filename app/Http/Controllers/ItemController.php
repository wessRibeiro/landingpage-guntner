<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        $item = new Item();
        return view('items')->with('items', $item->all());
    }
}
