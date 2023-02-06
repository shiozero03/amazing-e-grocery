<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Account;
use App\Models\Role;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
class Updatecontroller extends Controller
{
    //
    public function orders(Request $request){
        $id = $request->id;

        $data = [
            'checkout_at' => date('Y-m-d H:i:s')
        ];

        Order::where('account_id', $id)->where('checkout_at', null)->update($data);
        return redirect('homepage/cart/success')->with('success', 'berhasil checkout');
    }
    public function profil(Request $request){
        if(!Session('loginid')){
            return redirect('login')->with('error', 'You has not login');
        }
        $id = Session('loginid');
        $account = Account::where('account_id', $id)->first();

        if($account->email == $request->email){
            $validation = $request->validate([
                'first_name' => 'required|max:25',
                'email' => 'required|email',
                'gender' => 'required',
                'password' => ['required',Password::min(8)->letters()->numbers()],
                'last_name' => 'required|max:25',
                'confirmpassword' => ['required', Password::min(8)->letters()->numbers(), 'same:password']
            ]);            
        } else{
            $validation = $request->validate([
                'first_name' => 'required|max:25',
                'email' => 'required|email|unique:accounts',
                'gender' => 'required',
                'password' => ['required',Password::min(8)->letters()->numbers()],
                'last_name' => 'required|max:25',
                'confirmpassword' => ['required', Password::min(8)->letters()->numbers(), 'same:password']
            ]);
        }


        if (!$validation) {
            return back();
        } else{
            if($request->file('display_picture_link') == ''){
                if($account->password == $request->password){
                    $data = [
                        'gender_id' => $request->gender,
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'email' => $request->email
                    ];
                } else{
                    $data = [
                        'gender_id' => $request->gender,
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password)
                    ];
                }
            } else {
                $tujuan_upload = 'mystyle/image/display_picture/';
                $file = $request->file('display_picture_link');
                $namafile = time().'_'.$file->getClientOriginalName();
                $file->move($tujuan_upload,$namafile);

                if($account->password == $request->password){
                    $data = [
                        'gender_id' => $request->gender,
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'email' => $request->email,
                        'display_picture_link' => $namafile
                    ];
                } else{
                    $data = [
                        'gender_id' => $request->gender,
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'email' => $request->email,
                        'display_picture_link' => $namafile,
                        'password' => Hash::make($request->password)
                    ];
                }
            }

            Account::where('account_id', $id)->update($data);

            return redirect('homepage/profil/save')->with(['success' => 'Data has saved successfully']);
        }
    }
    public function account_maintenance(Request $request){
        if(!Session('loginid')){
            return redirect('login')->with('error', 'You has not login');
        }
        $id = Session('loginid');
        $idget = $request->id;
        $account = Account::where('account_id', $id)->first();
        $accountget = Account::where('account_id', $idget)->first();
        $roleget = Role::all();
        $data = [
            'account' => $account,
            'role' => $account->role_id,
            'accountget' => $accountget,
            'roleget' => $roleget
        ];
        return view('homepage.update-account-maintenance')->with($data);
    }
    public function update_role(Request $request){
        $data = [
            'role_id' => $request->role
        ];
        Account::where('account_id', $request->id_getaccount)->update($data);
        return redirect('/homepage/account-maintenance/save')->with(['success' => 'Data has saved successfully']);
    }
}
