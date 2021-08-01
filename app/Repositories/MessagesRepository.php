<?php


namespace App\Repositories;


use Illuminate\Support\Facades\DB;

class MessagesRepository
{
    public function all()
    {
        //クエリビルダ
        return $messages = DB::table('messages')
            ->select('id', 'title', 'message', 'created_at')
            ->orderBy('id', 'desc')
            ->get();
    }

}
