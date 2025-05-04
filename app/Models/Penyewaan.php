<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    public function user()
{
    return $this->belongsTo(User::class);
}

public function alat()
{
    return $this->belongsTo(AlatCamping::class, 'alat_camping_id');
}

public function pembayaran()
{
    return $this->hasOne(Pembayaran::class);
}

}
