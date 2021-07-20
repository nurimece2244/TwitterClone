<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function like()
    {

        return $this->hasOne(Tweets::class, foreignKey:'like_id', localKey: 'id');
    

    }

    public function user()
    {

        return $this->belongsTo('\App\Models\User');
        

    }
}