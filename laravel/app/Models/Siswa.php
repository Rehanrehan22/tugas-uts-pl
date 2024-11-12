<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kelas',
    ];

    public function absensis()
    {
        return $this->hasMany(Absensi::class);
    }
}
