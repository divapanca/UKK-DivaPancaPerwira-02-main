<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduan';
    protected $guarded =[];

    public function mas()
    {
        return $this->belongsTo(Masyarakat::class, 'nik_id');
    }
    public function us()
    {
        return $this->belongsTo(User::class, 'nik_id');
    }
    public function tanga()
    {
        return $this->hasOne(Tanggapan::class);
    }

    public function tanggapan()
    {
        return $this->hasMany(Tanggapan::class); }
    }
