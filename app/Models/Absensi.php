<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'absensi';

    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'status', 'waktu'];

    // Fungsi untuk relasi ke Model User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
