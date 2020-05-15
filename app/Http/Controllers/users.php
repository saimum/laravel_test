<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class users extends Controller
{
    function test_get(){
        return view('users.test_get');
    }

    function session_get(){
        return view('users.session_get');
    }
    function session_post(Request $request){
        $request->session()->put('session_data', $request->input());
        return $request->session()->get('session_data');
    }

    
    function index(){
        $list = DB::table('users')->get();
        return view('users.index')->with('list',$list);
    }
    
    function create_get(){
        return view('users.create_get');
    }
    function create_post(Request $request){   
        $this->validate(
            $request, 
            [
                'users_c_first_name' => 'required',
                'users_c_last_name' => 'required',
            ],
            [
                'users_c_first_name.required' => 'first name is required.',
                'users_c_last_name.required' => 'last name is required.'
        ]);

        $res = DB::table('users')->insert([
            'users_c_first_name'=> $request->input('users_c_first_name'),
            'users_c_last_name'=> $request->input('users_c_last_name'),
        ]);

        if ($res == 1){
            $confirmation_message = 'Succedded';
            return view('users.create_get',["confirmation_message"=>$confirmation_message]);
        }else{
            $confirmation_message = 'Failed';
            return view('users.create_get',["confirmation_message"=>$confirmation_message, "model"=>$request->input()]);
        }
    }

    function view(){
        $res = DB::table('users')->where('users_c_id',1)->get();
        return $res;
    }
}
