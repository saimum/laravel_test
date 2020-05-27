<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class product_category extends Controller
{
    function product_category_create(Request $request){
        $method = $request->method();
        if($method == 'GET'){
            return view('product_category.product_category_create');
        }else{
            return $request->input();
        }
        
    }
    
}
