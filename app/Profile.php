<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id','picture','department','school', 'country', 'state' ,'lga' , 'address' , 'status'
    ];
    
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
