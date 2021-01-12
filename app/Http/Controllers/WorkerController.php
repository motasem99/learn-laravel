<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\City;
use App\Models\National;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Worker::all();
        return view('worker.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $city=City::all();
        $national=National::all();
        return view('worker.create',compact('city','national'));
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
        $validData= $request->validate([
            'name'=>'required|min:3',
            'city_id'=>'required',
            'n_id'=>'required',
            'gender'=>'required',
        ]);
        Worker::create($request->all());
        return redirect('work');
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
        $data=Worker::find($id);
        $city=City::all();
        $national=National::all();
        return view('worker.edit',compact('data','city','national'));
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
        $validData= $request->validate([
            'name'=>'required|min:3',
            'city_id'=>'required',
            'n_id'=>'required',
            'gender'=>'required',
        ]);

        $data=Worker::find($id);
        $data->update($request->all());
        return redirect('work');
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
        $data=Worker::find($id);
        $data->delete();
        return redirect('work');
    }
}
