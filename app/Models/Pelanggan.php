<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'tb_pelanggan';

    protected $primaryKey = 'id';

    protected $guarded = [];

    protected $fillable = [
        'pel_id_gol', 'pel_no', 'pel_nama','pel_alamat','pel_hp','pel_ktp','pel_seri', 'pel_meteran','pel_aktif','pel_id_user',
    ];

    public function golongan(): HasOne
    {
        return $this->hasOne(Golongan::class, 'id', 'pel_id_gol');
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'pel_id_user');
    }
}
