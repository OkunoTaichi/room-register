<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    //テーブル名
    protected $table = 'rooms';

    //可変項目
    protected $fillable = 
    [
        'room_id',
        'title',
        'people',
        'content'
    ];
}
