<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    /**
     * 一覧表示 
     * 
     * @return view
     */
    public function room()
    {
        $rooms = Room::all();
        return view('room.list',['rooms' => $rooms]);
    }


    /**
     * 詳細表示 
     * 
     * @param int $id
     * @return view
     */
    public function detail($id)
    {
        $room = Room::find($id);
        if(is_null($room)){
            \Session::flash('err_msg' , 'データがありません。');
            return redirect( route('room') );
        }
        return view('room.detail',['room' => $room]);
    }
}
