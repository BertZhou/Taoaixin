<?php

namespace App\Http\Controllers\User;

use App\Models\Item;
use App\Models\UserFavorite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FavoriteController extends Controller
{
    public function index(Request $request)
    {
        $folders = UserFavorite::where('user_id', $request->user()->id)->get();
        $items = Item::whereIn('id', $folders->lists('item_id'))->get();

        return view('user.favorite.index', ['items' => $items]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'item_id'   =>  'required|integer|exists:items,id'
        ]);

        $favorite = UserFavorite::create([
            'item_id'   =>  $request->input('item_id'),
            'user_id'   =>  $request->user()->id
        ]);

        return redirect()->back();
    }

    public function destory(Request $request, $favorite_id)
    {
        $favorite = UserFavorite::where(['id' => $favorite_id, 'user_id' => $request->user()->id])->delete();

        return redirect()->back();
    }
}
