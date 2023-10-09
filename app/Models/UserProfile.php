<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    // protected $table = 'user_profiles';

    use HasFactory;

    protected $fillable = [
        'address',
        'amount',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(UserProfile::class);
    }


}
