<?php

namespace App\Http\Controllers\Portal;

use App\Models\User;
use App\Models\Item;
use App\Models\ItemRate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'offset'    =>  'integer|min:0',
            'limit'     =>  'integer|min:0'
        ]);

        $items = Item::skip($request->input('offset', 0))->take($request->input('limit', 10))->get();
        $sellers = User::whereIn('id', $items->pluck('user_id'))->get()->keyBy('id');

        return response()->json(['items' => $items, 'sellers' => $sellers]);
    }

    public function show(Request $request, $item_id)
    {
        $this->validate($request, [
            'offset'    =>  'integer|min:0',
            'limit'     =>  'integer|min:0'
        ]);

        $item = Item::findOrFail($item_id);
        $seller = User::findOrFail($item->user_id);
        $rates = ItemRate::where('item_id', $item->id)->skip($request->input('offset', 0))->take($request->input('limit', 0))->get();

        return response()->json(['item' => $item, 'seller' => $seller, 'rates' => $rates]);
    }
}