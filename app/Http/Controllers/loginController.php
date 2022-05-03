<?php

namespace App\Http\Controllers;
use Artisan;
use Illuminate\Http\Request;
use Session;
class loginController extends Controller
{
    //
    public function check(Request $r){
        // dd('H');
        if($r->name == 'admin' ){
            if($r->password == 'password'){
                $r->session()->put('role','admin');
                return redirect('/home');

            }
            else{
                $r->session()->flash('status','invalid password');
                return redirect()->back();
            }
        }
        else{
            $r->session()->flash('status','invalid user');
            return redirect()->back();
        }
    }
    public function destroy(Request $r){
        Session::flush();
        Artisan::call('cache:clear');
        return redirect('/');
    }
}
