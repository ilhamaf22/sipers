<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\log;

class DataController extends Controller
{
    public function receiveData(Request $request)
    {
        // Get the data from the HTTP request
        $uid = $request->input('uid');
        $tanggal = $request->input('tanggal');
        $masuk = $request->input('masuk');
        $keluar = $request->input('keluar');


        // Save the data to your database
        $data = new log();
        $data->uid = $uid;
        $data->tanggal = $tanggal;
        $data->masuk = $masuk;
        $data->keluar = $keluar;
        $data->save();

        // Send a response back to the Arduino
        return response()->json(['message' => 'Data received successfully'], 200);
    }
    public function updateKeluar(Request $request, $uid)
    {
        $data = log::find($uid); // get the record with the specified ID
        if (!$data) {
            return response()->json(['message' => 'Record not found'], 404); // return 404 if the record is not found
        }
        $keluar = $request->input('keluar');
        $data->keluar = $keluar;
        $data->save();
        return response()->json(['message' => 'Record updated successfully'], 200);
    }

    public function logView()
    {
        $log = Log::all();
        return view('log.show', ['log' => $log]);
    }
}
