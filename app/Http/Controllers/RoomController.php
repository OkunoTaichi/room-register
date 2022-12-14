<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * 一覧表示 
     * 
     * @return view
     */
    public function room()
    {
        return view('room.list');
    }
}
