<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use DB;
use App\Quotation;
//use Illuminate\Http\Request;
use App\User;
use Auth;
class UserController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {  
        $haveUserData = User::all();
        return view('userList',compact('haveUserData'));
    }

    public function edit($id)
    {
        $haveUserId = $id;
        return view('editUserDataRequest',compact('haveUserId'));
        
    }
    public function store($id)
    {
        $haveUserUpdatedName =  $_GET['name'];
        $haveUserId = $id;
        
        //.....with Query Builder.....//
        // DB::table('users')
        //      ->where('id', $haveUserId)
        //      ->update(['name' => $haveUserUpdatedName]);
        //      return redirect('userList');
        
        //.....with Eleqouent.....//
        User::find($id)->update(['name'=> $haveUserUpdatedName]);
        return redirect('userList');
    }

    
    public function destroy($id)
    {
        $haveUserId = $id;
        User::where('id',$haveUserId)->delete();
        return redirect('userList');
    }
    public function storingUserSignUp()
    {
       
        $this->validate(request(),[
            'name'     => 'required',
            'email'    => 'required|email',
          //  'password' => 'required'
        ]); 
        //dd(request()->all());
                   
          $haveUSerSignUpData = new User;
          $haveUSerSignUpData->name = request('name');
          $haveUSerSignUpData->email = request('email');
          $haveUSerSignUpData->password = bcrypt(request('password'));
          $haveUSerSignUpData->save();
          auth()->login($haveUSerSignUpData);
          return redirect('userList');
    }
}
