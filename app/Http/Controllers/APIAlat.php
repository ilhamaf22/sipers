<?php

namespace App\Http\Controllers;

use App\Models\log;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class APIAlat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->validate([
        //     'uid' => 'required'
        // ]);

        // Process the data and store it in the database or perform any other actions
        // You can access the fields using $request->input('field1') and $request->input('field2')
        $model = new log();
        $model->uid = $request->input('uid');
        $model->tanggal = Carbon::now();
        $model->masuk = Carbon::now();
        $model->keluar = Carbon::now();

        // Save the model to persist the data in the database
        $model->save();
        // Return a response
        return response()->json(['message' => 'Data stored successfully'], 201);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
