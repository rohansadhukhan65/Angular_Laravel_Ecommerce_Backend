<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function add(Request $request){
        $validator = Validator::make($request->all(),{
            
        });
    }
}
