<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class users extends Controller
{
    function index(){
        $list = DB::table('users')->get();
        return view('users.index')->with('list',$list);
    }

    function create_get(){
        return view('users.create_get');
    }
    function create_post(Request $request){
        $request->validate([
            'users_c_first_name'=>'required',
            'users_c_last_name'=>'required',
        ]);
        $res = DB::table('users')->insert([
            'users_c_first_name'=> $request->input('users_c_first_name'),
            'users_c_last_name'=> $request->input('users_c_last_name'),
        ]);
        if ($res == 1){
            //success
        }else{
            //failed
        }
    }

    function view(){
        $res = DB::table('users')->where('users_c_id',1)->get();
        return $res;
    }
}
