<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Item;
use App\Models\UserFavorite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FavoriteController extends Controller
{
    public function index($id = 0)
    {
        $user = User::findOrFail($id);
        $folders = UserFavorite::where('user_id', $user->id)->get();
        $items = Item::whereIn('id', $folders->lists('item_id'))->get();

        return view('user.favorite.index', ['user' => $user, 'items' => $items]);
    }
}
