<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model 
{
    use HasFactory;

    protected $guarded = ['id'];

    public function friend()
    {

        return $this->hasOne(User::class, foreignKey:'friend_id', localKey: 'id');
    

    }

    public function user()
    {

        return $this->belongsTo('\App\Models\User');
        

    }
}
