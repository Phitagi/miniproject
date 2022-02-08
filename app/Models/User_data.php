<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;

class User_data extends Model
{
    use HasFactory;

    protected $table = 'user_data';


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
