<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chat;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user,Chat $chat)
    {
        $this->user = $user;
        $this->chat = $chat;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::id();
        $users = $this->user->where('id','!=',$id)->get();
        return view('home',compact('users'));
    }
    /**
     * Show the chat page.
     *
     * @return view
     */
    public function chat($id)
    {
        $fromId = Auth::user();
        $toId = $this->user->where('id',$id)->select('id','name')->first();
        $chats = $this->chat->where('from_id',$fromId->id)->orwhere('to_id',$toId->id)->get();
        return view('chat',compact('fromId','toId','chats'));
    }
}
