<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Account;

class Deletecontroller extends Controller
{
    //
    public function orders(Request $request){
        $id = $request->id;
        $order = Order::where('order_id', $id);
        $order->delete();

        return back()->with('success', 'Item has been deleted');
        
    }
    public function account_maintenance(Request $request){
        $id = $request->id;
        $order = Order::where('account_id', $id);
        $account = Account::where('account_id', $id);
        $order->delete();
        $account->delete();

        return back()->with('success', 'Account has been deleted');
    }
}
