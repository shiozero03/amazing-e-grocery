<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

use App\Models\Account;

class Authcontroller extends Controller
{
    //
    public function register_process(Request $request){
        $validation = $request->validate([
            'first_name' => 'required|max:25',
            'email' => 'email|unique:accounts',
            'gender' => 'required',
            'password' => ['required',Password::min(8)->letters()->numbers()],
            'last_name' => 'required|max:25',
            'role' => 'required',
            'display_picture_link' => 'required',
            'confirmpassword' => ['required', Password::min(8)->letters()->numbers(), 'same:password']
        ]);


        if (!$validation) {
            return back();
        } else{
            $tujuan_upload = 'mystyle/image/display_picture/';
            $file = $request->file('display_picture_link');
            $namafile = time().'_'.$file->getClientOriginalName();
            $file->move($tujuan_upload,$namafile);

            $Account = new Account;
            $Account->role_id = $request->role;
            $Account->gender_id = $request->gender;
            $Account->first_name = $request->first_name;
            $Account->last_name = $request->last_name;
            $Account->email = $request->email;
            $Account->display_picture_link = $namafile;
            $Account->password = Hash::make($request->password);
            $Account->remember_token = $request->remember_token;
            $Account->save();

            return back()->with(['success' => 'Data has added successfully']);
        }
    }
}
