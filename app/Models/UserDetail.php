<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class UserDetail extends Model
{

    protected $fillable = [
        'user_id',
        'sex',
        'religion',
        'avatar',
        'nationality',
        'date_of_birth',
        'place_of_birth',
        'civil_status',
        'phone_number',
        'street',
        'city',
        'province',
        'state',
        'tid_sid',
        'year_course',
        'batch',
        'contact_persion',
        'relationship',
        'contact_information',        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
  
}
