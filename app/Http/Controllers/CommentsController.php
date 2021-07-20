<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Comments;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|max:140',
            'tweetid' => 'required|numeric'
        ]);

        Comments::create([
            'user_id' => Auth::id(),
            'text' => $request->text,
            'tweets_id' => $request->tweetid
        ]);

        return redirect()->route('tweets.show', $request->tweetid);
    }
}
