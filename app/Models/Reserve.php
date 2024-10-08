<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Reserve extends Model
{
    use HasFactory;
    protected $primaryKey = 'reserve_id'; //主キーカラム名を指定

    //1対多リレーション
    public function guest()
    {
        return $this->belongsTo(Guest::class, 'guest_id', 'guest_id');
    }
    //多対多リレーション
    public function rooms(): BelongsToMany
    {
        // belongsToMany(相手のモデル、中間tableの名前、中間table上の自モデルの外部キー、中間table上の相手モデルの外部キー)
        return $this->belongsToMany(Room::class,'details', 'reserve_id', 'room_room_id')
                    ->withPivot('days','price');
    }
}
