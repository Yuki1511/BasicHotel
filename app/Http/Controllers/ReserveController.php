<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index()
    {
        $reserves = Reserve::all();
        // viewに入っているguestフォルダのindex.blade.phpファイルを呼び出す指示
        return view('reserve.index', compact('reserves'));
    }
}
