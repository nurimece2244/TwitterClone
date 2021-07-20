<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\tweets;

class User extends Authenticatable
{
    public $timestamps = false;
    use HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function friends()
    {
        return $this->hasMany('\App\Models\Friend');
    }

    public function following()
    {
        return $this->belongsToMany(User::class, 'friends', 'friend_id', 'user_id');
    }

    // users that follow this user
    public function followers()
    {
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id');
    }

    public function addFriend(User $user)
    {
        if ($this->friends()->where(column: 'friend_id', operator: $user->id)->first()) {
            return null;
        }
        return $this->friends()->save(
            model: new Friend(attributes: [

                'friend_id' => $user->id,

            ])
        );
    }

    public function isFriend()
    {
        return Friend::where('user_id', auth()->id())->where('friend_id', $this->id)->first();
    }

    public function like()
    {
        return $this->belongsToMany(User::class, 'likes', 'user_id', 'like_id');
    }
}
