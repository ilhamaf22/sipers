<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\log;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LogController extends Controller
{
    function post(Request $request)
    {
        $log = new log;
        $log->uid = $request->uid;
        $log->tanggal = $request->tanggal;
        $log->masuk = $request->masuk;
        $log->keluar = $request->keluar;

        $log->save();

        return response()->json(
            [
                "message" => "Post Method Success",
                "data" => $log
            ]
        );
    }
    function get()
    {
        $data = log::all();
        return response()->json(
            [
                "message" => "Get Method Success",
                "data" => $data
            ]
        );
    }
    function put($uid)
    {
        return response()->json(
            [
                "message" => "PUT Method Success", $uid
            ]
        );
    }
    function delete($uid)
    {
        return response()->json(
            [
                "message" => "DELETE Method Success", $uid
            ]
        );
    }
    function log($uid)
    {
        $tanggal = Carbon::today();
        $masuk = Carbon::now();
        DB::table('logs')->insert(['uid' => $uid]);
        DB::table('logs')->insert(['tanggal' => $tanggal]);
        DB::table('logs')->insert(['masuk' => $masuk]);
        return response()->json(['success' => true]);
    }

    public function showLogs()
    {
        $logs = log::all();
        $logs = log::with('DetailUser')->get();
        return view('admin/home', ['logs' => $logs]);
    }
    public function getUser()
    {
        $users = log::join('DetailUser', 'log.uid', '=', 'DetailUser.uid')
            ->select('log.no', 'log.uid', 'DetailUser.name', 'log.masuk', 'log.keluar')
            ->get();
        return view('admin.home', ['users' => $users]);
    }
}
