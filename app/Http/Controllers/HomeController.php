<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
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
        return view('chat',compact('fromId','toId'));
    }
}
