<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    public function penyewaan()
{
    return $this->belongsTo(Penyewaan::class);
}

}
