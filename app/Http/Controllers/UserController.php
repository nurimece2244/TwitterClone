<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Friend;

class UserController extends Controller
{
    public function viewProfile(User $user)
    {
        return view('layouts.profile', [
            'user' => $user,
        ]);
    }




    public function takipci(User $user)
    {
        return view('follow.takipci', [
            'user' => $user,

        ]);
    }

    public function takipEdilen(User $user)
    {
        return view('follow.takipEdilen', [
            'user' => $user,

        ]);
    }


    public function addFriend(User $user)
    {
        $friend = auth()->user()->addFriend($user);
        if ($friend == null) {
            return response()->json(['message' => 'Already a friend'], 500);
        }


        return response()->json($friend);
    }

    public function removeFriend(User $user)
    {
        $friend = $user->isFriend();

        if ($friend == null) {
            return  response()->json(['message' => 'You are not friends'], 500);
        }

        $friend->delete();

        return  response()->json(['Successfully removed friend']);
    }
    public function isFriend()
    {
        return Friend::where('user_id', auth()->id())->where('friend_id', $this->id)->first();
    }
}
