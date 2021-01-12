<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;

class TestController extends Controller
{
    public function test_show(){
        $req1=test::all();
        // dd($req1);
        return view('test',compact('req1'));
    }
}
