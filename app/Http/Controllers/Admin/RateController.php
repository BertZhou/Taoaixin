<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use App\Models\ItemRate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RateController extends Controller
{
    public function index($item_id = 0)
    {
        $item = Item::find($item_id);
        $rates = ItemRate::where('item_id', $item->id)->paginate(20);

        return view('admin.item.index', ['item' => $item, 'rates' => $rates]);
    }
}