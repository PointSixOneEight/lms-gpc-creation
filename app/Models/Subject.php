<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher_id',
        'subject_name',
        'class',
        'schedule',
        'code',
    ];

    // public function getRouteKeyName()
    // {
    //     return 'subject_name';
    // }

    public function user()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    

}
