<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::paginate(20);
        $users = User::whereIn('id', $items->pluck('user_id'))->get()->keyBy('id');

        return view('admin.item.index', ['items' => $items, 'users' => $users]);
    }

    public function show($item_id)
    {
        $item = Item::find($item_id);

        return view('admin.item.show', ['item' => $item]);
    }

    public function edit($item_id)
    {
        $item = Item::find($item_id);

        return view('admin.item.show', ['item' => $item]);
    }

    public function update(Request $request, $item_id)
    {
        $this->validate($request, [
            'name'      =>  'required|alpha_dash',
            'price'     =>  'required|numeric|min:0',
            'content'   =>  'string',
            'quantity'  =>  'required|integer|min:0'
        ]);

        $item = Item::find($item_id);

        $item->update([
            'name'      =>  $request->input('name'),
            'price'     =>  $request->input('price'),
            'content'   =>  $request->input('content'),
            'quantity'  =>  $request->input('quantity')
        ]);

        return redirect('admin/item');
    }

    public function destory(Request $request, $item_id)
    {
        $item = Item::find($item_id);
        $item->delete();

        return redirect()->back();
    }
}