<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class logoutcontroller extends Controller
{
    

/* Process the logout request */
public function logout(Request $request) {
        Auth::logout();
        return redirect('/login')->with(['msg_body' => 'You signed out!']);
}
}
