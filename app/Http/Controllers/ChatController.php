<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Create a new controller instance
     */
    public function __construct(){

        $this->middleware('auth');

    }

    /**
     * Show the application dashboard
     */
    public function showChat(){
        
        return view('admin.chat.show');

    }
}
