<?php

namespace App\Http\Controllers\Business;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::where('user_id', $request->user()->id)->paginate(20);

        return view('business.item.index', ['items' => $items]);
    }

    public function show(Request $request, $item_id)
    {
        $item = Item::where(['id' => $item_id, 'user_id' => $request->user()->id])->first();

        return view('business.item.show', ['item' => $item]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required|alpha_dash',
            'content'   =>  'string',
            'price'     =>  'required|numeric|min:0',
            'quantity'  =>  'required|integer|min:0'
        ]);

        $item = Item::create([
            'name'      =>  $request->input('name'),
            'content'   =>  $request->input('content'),
            'price'     =>  $request->input('price'),
            'quantity'  =>  $request->input('quantity'),
            'user_id'   =>  $request->user()->id,
            'view'      =>  0,
            'sold'      =>  0
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $item_id)
    {
        $this->validate($request, [
            'name'      =>  'required|alpha_dash',
            'content'   =>  'string',
            'price'     =>  'required|numeric|min:0',
            'quantity'  =>  'required|integer|min:0'
        ]);

        $item = Item::where(['id' => $item_id, 'user_id' => $request->user()->id])->first();

        if (empty($item)) {
            return redirect()->back()->withErrors('Item not available.');
        }
        
        $item->update([
            'name'      =>  $request->input('name'),
            'content'   =>  $request->input('content'),
            'price'     =>  $request->input('price'),
            'quantity'  =>  $request->input('quantity')
        ]);

        return redirect()->back();
    }

    public function destory(Request $request, $item_id)
    {
        $item = Item::where(['id' => $item_id, 'user_id' => $request->user()->id])->delete();

        return redirect()->back();
    }
}