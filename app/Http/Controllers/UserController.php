<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rank;
use DB;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        $ranks = Rank::all();
        return view('superadmin', compact('users', 'ranks'));
    }

    
}
