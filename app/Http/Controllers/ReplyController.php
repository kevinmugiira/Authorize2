<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store(Conversation $id)
    {
        $this->validate(\request(), ['body'=>'required']);
        $id->addReply(\request('body'));

        return back();
    }
}
