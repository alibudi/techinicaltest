<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassWatchTime extends Model
{
    use HasFactory;
    protected $fillable = ['class_id', 'user_id', 'watch_time'];

    public function class()
    {
        return $this->belongsTo(ClassModel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
