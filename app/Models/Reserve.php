<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Reserve extends Model
{
    use HasFactory;
//1対多リレーション
    public function guest() 
    {
        return $this->belongsTo(Guest::class);
    }
//多対多リレーション
    public function rooms(): BelongsToMany
    {
        return $this->belongsToMany(Room::class);
    }
}
