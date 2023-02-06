<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use Illuminate\Support\Facades\DB;

class Homepagecontroller extends Controller
{
    //
    public function home(){
        $item = Item::paginate(10);
        $data = [
            'item' => $item
        ];
        return view('homepage.home')->with($data);
    }
    public function items(Request $request){

        $items = Item::where('item_id', $request->id)->get();

        $data = [
            'item' => $items
        ];

        return view('homepage.items')->with($data);
    }
}
