<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $primaryKey = 'guest_id'; //主キーカラム名を指定

    public function reserves() {
        return $this->hasMany(Reserve::class);
    }

}
