<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdataNotnullToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('nickName')->default('')-> comment('昵称')-> change(); ;
            $table->string('avatarUrl')->default('')-> comment('头像')-> change(); ;
            $table->tinyInteger('gender')->default(0)-> comment('性别 值为1时是男性，值为2时是女性，值为0时是未知')-> change(); ;
            $table->string('city')->default('')-> comment('城市')-> change(); ;
            $table->string('province')->default('')-> comment('省份')-> change(); ;
            $table->string('country')->default('')-> comment('国家')-> change(); ;
            $table->string('language')->default('')-> comment('语言')-> change(); ;

            $table->unique('open_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
