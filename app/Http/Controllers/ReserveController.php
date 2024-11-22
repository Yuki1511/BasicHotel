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
        // compact関数で、ビューに変数と配列を渡すことができる※$はつけない
        return view('reserve.index', compact('reserves'));
    }
}
