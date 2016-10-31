<?php

namespace App\Http\Controllers\Business;

use App\Models\Item;
use App\Models\ItemRate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RateController extends Controller
{
    public function index(Request $request, $item_id = 0)
    {
        $item = Item::where(['id' => $item_id, 'user_id' => $request->user()->id])->first();
        $rates = ItemRate::where('item_id', $item->id)->paginate(20);

        return view('business.item.index', ['item' => $item, 'rates' => $rates]);
    }
}