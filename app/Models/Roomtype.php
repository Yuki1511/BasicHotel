<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomtype extends Model
{
    use HasFactory;

    protected $primaryKey = 'roomtype_ID';

    public $incrementing = false;

    protected $keyType = 'string';
//roomsメソッドで定義・・・hasManyメソッドを使用
    public function rooms() {
        return $this->hasMany(Room::class);
    }
}
