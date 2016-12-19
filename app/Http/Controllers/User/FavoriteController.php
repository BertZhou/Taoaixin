<?php

namespace App\Http\Controllers\User;

use App\Models\Item;
use App\Models\UserFavorite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class FavoriteController extends Controller
{
    public function index(Request $request)
    {
        $folders = UserFavorite::where('user_id', Session::get("userid"))->get();
        $items = Item::whereIn('id', $folders->pluck('item_id'))->get()->keyBy('id')->toArray();

        foreach ($folders as $folder) {
            $items[$folder['item_id']]['favorite_id'] = $folder->id;
        }
        return view('user.favorite.index', ['items' => $items]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'item_id'   =>  'required|integer|exists:items,id'
        ]);

        $favorite = UserFavorite::create([
            'item_id'   =>  $request->input('item_id'),
            'user_id'   =>  Session::get("userid")
        ]);

        return redirect()->back();
    }

    public function destroy(Request $request, $favorite_id)
    {
        $favorite = UserFavorite::where(['id' => $favorite_id, 'user_id' => Session::get("userid")])->delete();

//        return redirect()->back();
    }
}
