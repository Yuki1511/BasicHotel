<?php

namespace App\Http\Controllers;

use App\Models\Roomtype;
use Illuminate\Http\Request;

class RoomtypeController extends Controller
{
    public function index(){
        $roomtypes = Roomtype::all();
// viewに入っているroomtypeフォルダのindex.blade.phpファイルを呼び出す指示
        return view('roomtype.index', compact('roomtypes'));
    }
}
