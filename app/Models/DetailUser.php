<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailUser extends Model
{
    use HasFactory;

    protected $table = 'detailuser';

    protected $fillable = [
        'id',
        'uid',
        'nama',
        'keterangan',
        'notelp',
        'created_at',
        'updated_at',
    ];
    public function log()
    {
        return $this->hasMany(log::class, 'uid');
    }
}
