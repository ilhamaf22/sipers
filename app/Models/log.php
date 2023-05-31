<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\DetailUser;

class log extends Model
{
    use HasFactory;

    protected $table = 'logs';

    protected $fillable = [
        'uid',
        'tanggal',
        'masuk',
        'keluar',
    ];

    // public function detail()
    // {
    //     return $this->belongsTo(DetailUser::class);
    // }

    public function detailUser()
    {
        return $this->belongsTo(DetailUser::class, 'uid', 'uid');
    }

    public function getUser()
    {
        $users = log::join('DetailUser', 'log.uid', '=', 'DetailUser.uid')
            ->select('log.no', 'log.uid', 'DetailUser.name', 'log.masuk', 'log.keluar')
            ->get();
        return view('admin.home', ['users' => $users]);
    }
}
