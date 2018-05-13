<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        $roles = Role::pluck('name', 'name');
        return view('superadmin', ['users' => $users, 'roles' => $roles]);
    }

    public function activeDeactive(Request $request) {
        if (Auth::id() != $request->user_id) {
          $user = User::findOrFail($request->user_id);
          $user->active = !$user->active;
          $user->save();
          return redirect()->route("superadmin")->with('success', $user->name." heeft een andere status gekregen!");
        } else  {
          return redirect()->back()->withErrors(['Je kan de status niet veranderen!']);
        }
      } 

      public function changeRole(Request $request) {
        if (Auth::id() != $request->user_id) {
          $user = User::findOrFail($request->user_id);
          $user->syncRoles($request->role);
          return redirect()->route("superadmin")->with('success', $user->name." heeft een andere rang gekregen!");
        } else  {
          return redirect()->back()->withErrors(['Je kan de rang niet veranderen!']);
        }
      }
}
