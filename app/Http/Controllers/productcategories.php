<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\productcategory;

class productcategories extends Controller
{
    function blank_page(){
        return view('productcategories.blank_page');
    }

    function productcategories_create(Request $request){
        $method = $request->method();
        if($method == 'GET'){
            return view('productcategories.productcategories_create');
        }
        // return $request->input();
        // $productcategory = new productcategory();
        $productcategory = new productcategory();
        $productcategory->productcategory_title = $request->productcategory_title;
        $productcategory->productcategory_description = $request->productcategory_description;
        $productcategory->save();
        return view('productcategories.blank_page');
    }
    
    
}
