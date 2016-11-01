<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Item;
use App\Models\ItemRate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RateController extends Controller
{
    public function index($item_id = 0)
    {
        $item = Item::find($item_id);
        if (!empty($item)) {
            $rates = ItemRate::where('item_id', $item->id)->paginate(20);
            $users = User::whereIn('id', $rates->pluck('buyer_user_id'))->get()->keyBy('id');
        }

        return view('admin.item.rate.index', ['item' => $item, 'rates' => $rates, 'users' => $users]);
    }
}