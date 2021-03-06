<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index()
    {
        $convers = Conversation::all();
        return view('conversation.index', [
            'conver' => $convers
        ]);
    }

    public function show(Conversation $id)
    {

        //authorizing a only signed in user to view a conversation. Has been defined in the conversationPolicy
        #$this->authorize('view', $id);

        $versition = Conversation::find($id);
        return view('conversation.show', [
            'versi' => $versition
        ]);
    }
}
