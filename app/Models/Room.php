<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $primaryKey = 'room_ID'; //主キーカラム名を指定

    public $incrementing = false;  //オートインクリメントにしない

    protected $keyType = 'string';  //IDのデータ型をstringに指定

    public function roomtype() {
        return $this->belongsTo(Roomtype::class);
    }
}
