<?php


namespace App\Repositories;

use App\Models\Messages;

class MessagesRepository
{
    public function all()
    {
        return $messages = Messages::getMessages();
    }

}
