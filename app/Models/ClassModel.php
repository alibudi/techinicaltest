<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;
    protected $fillable = ['mentor_id', 'name'];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function classWatchTimes()
    {
        return $this->hasMany(ClassWatchTime::class);
    }
}
