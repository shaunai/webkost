<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notifikasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pesan',
        'status',
        'waktu_kirim'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
