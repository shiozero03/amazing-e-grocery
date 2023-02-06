<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Account;
use App\Models\Order;
use App\Models\Gender;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

use Session;
class Homepagecontroller extends Controller
{
    //
    public function index(){
        if(!Session('loginid')){
            return redirect('login')->with('error', 'You has not login');
        } else {
            return redirect('homepage/home');
        }
    }
    public function home(){
        if(!Session('loginid')){
            return redirect('login')->with('error', 'You has not login');
        }
        $id = Session('loginid');
        $account = Account::where('account_id', $id)->first();
        $item = Item::paginate(10);
        $data = [
            'item' => $item,
            'account' => $account,
            'role' => $account->role_id
        ];
        return view('homepage.home')->with($data);
    }
    public function items(Request $request){
        if(!Session('loginid')){
            return redirect('login')->with('error', 'You has not login');
        }
        $id = Session('loginid');
        $account = Account::where('account_id', $id)->first();
        $item = Item::where('item_id', $request->id)->first();

        $data = [
            'item' => $item,
            'account' => $account,
            'role' => $account->role_id
        ];

        return view('homepage.items')->with($data);
    }
    public function cart(){
        if(!Session('loginid')){
            return redirect('login')->with('error', 'You has not login');
        }
        $id = Session('loginid');
        $account = Account::where('account_id', $id)->first();
        $order = Order::join('items', 'orders.item_id', '=', 'items.item_id')->where('account_id', $id)->where('checkout_at', null)->get();
        $pricetotal = Order::join('items', 'orders.item_id', '=', 'items.item_id')->where('account_id', $id)->where('checkout_at', null)->sum('items.price');
        $data = [
            'account' => $account,
            'role' => $account->role_id,
            'order' => $order,
            'total' => $pricetotal
        ];

        return view('homepage.cart')->with($data);
    }
    public function checkoutsuccess(){
        if(!Session('loginid')){
            return redirect('login')->with('error', 'You has not login');
        }
        $id = Session('loginid');
        $account = Account::where('account_id', $id)->first();
        $data = [
            'account' => $account,
            'role' => $account->role_id
        ];
        return view('homepage.successitems')->with($data);
    }
    public function profil(){
        if(!Session('loginid')){
            return redirect('login')->with('error', 'You has not login');
        }
        $id = Session('loginid');
        $account = Account::where('account_id', $id)->first();
        $gender = Gender::all();
        $genderNow = Gender::where('gender_id', $account->gender_id)->first();
        $roleNow = Role::where('role_id', $account->role_id)->first();
        $role = Role::all();
        $data = [
            'gender' => $gender,
            'account' => $account,
            'role' => $account->role_id,
            'genderNow' => $genderNow,
            'roleNow' => $roleNow
        ];
        return view('homepage.profil')->with($data);
    }
    public function savedprofile(){
        if(!Session('loginid')){
            return redirect('login')->with('error', 'You has not login');
        }
        $id = Session('loginid');
        $account = Account::where('account_id', $id)->first();
        $data = [
            'account' => $account,
            'role' => $account->role_id
        ];
        return view('homepage.savedprofile')->with($data);
    }
    public function account_maintenance(){
        if(!Session('loginid')){
            return redirect('login')->with('error', 'You has not login');
        }
        $id = Session('loginid');
        $account = Account::where('account_id', $id)->first();
        $allaccount = Account::all();
        $data = [
            'account' => $account,
            'role' => $account->role_id,
            'allaccount' => $allaccount
        ];
        return view('homepage.account-maintenance')->with($data);
    }
    public function savedaccount(){
        if(!Session('loginid')){
            return redirect('login')->with('error', 'You has not login');
        }
        $id = Session('loginid');
        $account = Account::where('account_id', $id)->first();
        $data = [
            'account' => $account,
            'role' => $account->role_id
        ];
        return view('homepage.savedaccount')->with($data);
    }

}
