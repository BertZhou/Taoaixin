<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::paginate(20);

        return view('admin.item.index', ['items' => $items]);
    }

    public function show($item_id)
    {
        $item = Item::find($item_id);

        return view('admin.item.show', ['item' => $item]);
    }
}