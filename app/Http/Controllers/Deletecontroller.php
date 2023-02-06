<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class Deletecontroller extends Controller
{
    //
    public function orders(Request $request){
        $id = $request->id;
        $order = Order::where('order_id', $id);
        $order->delete();

        return back()->with('success', 'Items has been deleted');
        
    }
}
