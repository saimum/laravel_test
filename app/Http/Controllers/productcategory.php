<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productcategory extends Controller
{
    function blank_page(){
        return view('productcategory.blank_page');
    }

    function productcategory_create(Request $request){
        $method = $request->method();
        if($method == 'GET'){
            return view('productcategory.productcategory_create');
        }
        return $request->input();
        
    }
    
    
}
