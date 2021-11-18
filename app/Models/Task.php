<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'subject_id',
        'name',
        'description',
        'file_path',
      
    ];
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
