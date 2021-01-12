<?php

namespace App\Http\Controllers;

use App\Models\City;

use Illuminate\Http\Request;


class CitysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=City::all();
      //  return view('city.index',['data'=>$data]); // data as array
        return view('city.index',compact('data')); // data as object
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('city.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // echo $request->post('city_name');
            $validdata=$request->validate([
                'city_name'=>'required|min:4|max:10',
            ]);
            City::create($request-> all());
            return redirect('citys');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data=city::find($id);
        return view('city.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($request);
        $validData = $request->validate([
            'city_name'=>'required|min:4|max:10'
        ]);
        $data=City::find($id);
        $data->update($request->all());
        return redirect('citys');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = City::find($id);
        $data->delete();
        return redirect('citys');
    }
}
