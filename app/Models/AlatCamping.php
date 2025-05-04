<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlatCamping extends Model
{
    public function penyewaan()
{
    return $this->hasMany(Penyewaan::class);
}

}
