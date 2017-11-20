<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Musonza\Chat\Chat;
use Musonza\Chat\Conversations\Conversation;

class UserController extends Controller
{
    public function __construct()
    {
        \Auth::loginUsingId(2);
    }

    public function index(User $user)
    {
        $zan_count = $user->articles()->has('zans')->count();
        return view('user.index', compact('user', 'zan_count'));
    }

    public function message(User $to)
    {

//        dd(auth()->id());
        if ($to->id != auth()->id()) {
            $participants = [auth()->id(), $to->id];
            if (!$conversation = \Chat::getConversationBetween(auth()->id(), $to->id)){

                $conversation = \Chat::createConversation($participants);

            }
//            dd($conversation);
//            $conversation->update(['data'=>[
//                'title' => 'a test conversation',
//                'desc' => 'php channel desc'
//            ]
//            ]);
            $my_msg = \Chat::conversations($conversation)->for(auth()->user())->getMessages(10, 1) ?? null;
//            dd($my_msg);

        }
        return view('user.message', compact('conversation', 'to','my_msg'));
    }

    public function doChat(Request $request, Conversation $con)
    {
//        dd($con);
//        dd(auth()->id());
        $msg = $request->input('msg');
        \Chat::message($msg)->from(auth()->id())->to($con)->send();
    }
}
