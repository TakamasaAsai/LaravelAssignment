<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Messages extends Model
{

    public static function getMessages()
    {
        //クエリビルダ
        return $messages = DB::table('messages')
            ->select('id', 'title', 'message', 'created_at')
            ->orderBy('id', 'desc')
            ->get();
    }

}
