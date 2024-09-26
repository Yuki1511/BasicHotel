<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::all();
// viewに入っているguestフォルダのindex.blade.phpファイルを呼び出す指示
        return view('guest.index', ['guests' => $guests]);
    }
}
