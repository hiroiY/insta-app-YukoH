<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    public $timestamps = false; //we don't need to use timestamps

    // Use this method to get the info of a followr
    public function follower() {
        return $this->belongsTo(User::class, 'follower_id')->withTrashed();
    }

    # Use this method to get the info of the user being followed
    public function following(){
        // return $this->belongsTo(User::class,'following_id');
        
        return $this->belongsTo(User::class)->withTrashed();
    }
}
