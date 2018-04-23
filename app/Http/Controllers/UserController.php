<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('superadmin', compact('users'));
    }

    public function updateRank(Request $request){
        $userId = $request->userID;
         $rank_val = $request->rank_val;
        $update_rank = DB::table('users')->where('id',$userId)->update(['admin' =>$rank_val]);
        if($update_rank){
          echo "rank is updated successfully";
        }
      }
}
