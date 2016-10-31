<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Item;
use App\Models\UserFavorite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FavoriteController extends Controller
{
    public function index($user_id = 0)
    {
        $user = User::findOrFail($user_id);
        $folders = UserFavorite::where('user_id', $user->id)->get()->toArray();

        if (!empty($folders)) {
            $items = Item::whereIn('id', array_column($folders, 'item_id'))->get();
        } else {
            $items = [];
        }

        return view('admin.user.favorite.index', ['user' => $user, 'items' => $items]);
    }
}
