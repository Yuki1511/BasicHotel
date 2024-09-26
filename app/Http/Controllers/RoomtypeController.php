<?php

namespace App\Http\Controllers;

use App\Models\Roomtype;
use Illuminate\Http\Request;


class RoomtypeController extends Controller
{
    public function index(){
        $roomtypes = Roomtype::all();

        return view('roomtype.index', ['roomtypes' => $roomtypes]);

        
    }
}
