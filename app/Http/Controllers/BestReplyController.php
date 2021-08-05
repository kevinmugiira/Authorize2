<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;

class BestReplyController extends Controller
{
    public function store(Reply $reply)
    {
        //authorize that the current user has permission to set the best reply for the conversation
        $this->authorize('update', $reply->conversation());

        //set as the best reply
        /* //since these have been declared in the conversation model, they can then be removed
        $reply->conversation->best_reply_id = $reply->id;
        $reply->conversation->save(); */

        $reply->conversation->setBestReply($reply);

        //redirect back to the conversation page
        return back();
    }
}
