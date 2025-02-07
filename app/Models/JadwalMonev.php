<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JadwalMonev extends Model
{
    /** @use HasFactory<\Database\Factories\JadwalMonevFactory> */
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    // protected $with = [
    //     'timMonev',
    //     'programKerja',
    // ];

    public function timMonev()
    {
        return $this->belongsToMany(User::class, 'jadwal_tim_monevs', 'id_jadwal', 'id_user')
            ->withPivot('hadir')
            ->withTimestamps();
    }
    public function programKerja()
    {
        return $this->belongsTo(ProgramKerja::class, 'id_proker');
    }
    public function notulensi()
    {
        return $this->hasOne(NotulensiMonev::class, 'id_jadwal');
    }
}
