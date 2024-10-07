<?php

namespace App\Http\Controllers;

use App\Models\Detail;  //追記忘れず
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index() {
        $details = Detail::all();
// viewに入っているdetailフォルダのindex.blade.phpファイルを呼び出す指示
        return view('detail.index', compact('details'));
    }
}
