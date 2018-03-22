<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SuperAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    //$this->middleware('auth:superadmin');
    $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersData = DB::table('users')
        -> get();
        return view ('superadmin', compact('usersData', $usersData));
    }
}