<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Account;
use App\Models\Order;

class Storecontroller extends Controller
{
    //
    public function orders(Request $request){

        $items = Item::where('item_id', $request->item_id)->first();
        $order = new Order;
        $order->account_id = $request->account_id;
        $order->item_id = $request->item_id;
        $order->price = $items->price;
        $order->save();

        return back()->with('success', 'Items has added to cart');
    }
}
