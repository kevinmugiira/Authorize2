<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id'
    ];


    public function addReply($body)
    {
        //both these methods work the same
        $this->reply()->create(compact('body'));
        #$this->user()->create(id);

        //percisting the reply to the database together with the conversation_id and user_id



        /*
        Reply::create([

            'body' => request('body'),
            #'user_id' => auth()->id(),
            'conversations_id' => $this->id

        ]); */
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reply()
    {
        return $this->hasMany(Reply::class);
    }


}
