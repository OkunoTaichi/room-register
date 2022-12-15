<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Http\Requests\RoomRequest;


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

    /**
     * 登録画面を表示する 
     * 
     * @return view
     */
    public function create()
    {
        return view('room.form');
    }

    /**
     * 登録する 
     * 
     * @return view
     */
    public function store(RoomRequest $request)
    {
        // データを受け取る
        $inputs = $request->all();
        \DB::beginTransaction();
        try{
            // データを登録
            Room::create($inputs);
            \DB::commit();
        }catch(\Throwable $e){
            \DB::rollback();
            abort(500);
        }
        \Session::flash('err_msg' , '登録しました。');
        return redirect( route('room') );
    }

     /**
     * 編集画面表示 
     * 
     * @param int $id
     * @return view
     */
    public function edit($id)
    {
        $room = Room::find($id);
        if(is_null($room)){
            \Session::flash('err_msg' , 'データがありません。');
            return redirect( route('room') );
        }
        return view('room.edit',['room' => $room]);
    }

        /**
     * 更新する 
     * 
     * @return view
     */
    public function update(RoomRequest $request)
    {
        // データを受け取る
        $inputs = $request->all();
        \DB::beginTransaction();
        try{
            // データを更新
            Room::where('id', $inputs['id'])->update(['title' => $inputs['title'],'content' => $inputs['content']]);
            
            \DB::commit();
        }catch(\Throwable $e){
            \DB::rollback();
            abort(500);
        }
        \Session::flash('err_msg' , '更新しました。');
        return redirect( route('room') );
    }



}
