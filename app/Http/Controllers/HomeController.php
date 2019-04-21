<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class HomeController extends Controller
{
    public function show()
    {
        $items = Item::limit(20)->get();
        return view("home.show", compact("items"));
    }
}
