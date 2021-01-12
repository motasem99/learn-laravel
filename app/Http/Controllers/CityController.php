<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    //
    public function city_show(){
        $data=City::all();
        // dd($data);
        return view('city',['data'=> $data]);
    }
}
