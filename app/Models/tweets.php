<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class tweets extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'text', 'user_id'
    ];

    public function comments()
    {
        return $this->hasMany('\App\Models\Comments');
    }

    public function user()
    {
        return $this->belongsTo('\App\Models\User');
    }

    public function setTextAttribute($text)
    {
        $this->attributes['text'] = $text;
    }

    
    public function isLike()
    {
        return Like::where('user_id', auth()->id())->where('like_id', $this->id)->first();
    }

    public function countLike() 
    {
    return $this->belongsToMany(User::class, 'likes', 'like_id','user_id');
    }

    public function addLike(Tweets $tweet)
    {
        if($this -> like() -> where( column: 'like_id', operator:$tweet -> id) -> first())
        {
            return null;
        }
        return $this -> like() -> save (
            model: new Like( attributes: [

                'like_id'=> $tweet-> id,

            ])
            );
    }

    public function like()
    {
        return $this->hasMany('\App\Models\Like');
    }
    
    
    
}