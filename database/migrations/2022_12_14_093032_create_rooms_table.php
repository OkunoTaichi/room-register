<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('rooms')){
            Schema::create('rooms', function (Blueprint $table) {
                $table->id();
                $table->integer('room_id',1000);//部屋番号＿追加
                $table->string('title',10);//部屋タイプ
                $table->integer('people',10);//最大収容人数＿追加
                $table->text('content');//特記事項
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
