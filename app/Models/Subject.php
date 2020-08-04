<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use SoftDeletes;
    protected $table = 'subjects';
    protected $fillable = [
        'name',
        'image',
    ];

    public function classroooms()
    {
        return $this->hasMany(Classroom::class);
    }
}
