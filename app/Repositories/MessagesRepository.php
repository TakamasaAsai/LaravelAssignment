<?php


namespace App\Repositories;

use App\Models\Messages;

class MessagesRepository
{
//    コンストラクタの追加、コンストラクタでnewする
    private $messages;
    public function __construct(Messages $messages)
    {
        $this->messages = $messages;
    }
    public function all()
    {
//        Repositoryではクエリの処理のみを書く
//        \Facades\DBはRepositoryで使わない
        $messages = $this->messages;
        return $messages
        ->select('id', 'title', 'message', 'created_at')
        ->orderBy('id', 'desc')
        ->get();
    }

}
