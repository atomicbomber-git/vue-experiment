<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function index()
    {
        
    }
    
    public function create()
    {
        return view("item.create");
    }
    
    public function store()
    {
        $data = $this->validate(request(), [
            "name" => "required|string",
            "price" => "required|gt:0",
            "stock" => "required|gt:0",
        ]);
    }
    
    public function edit(Item $item)
    {
    }
    
    public function update(Item $item)
    {
    }
    
    public function delete(Item $item)
    {
    }
}
