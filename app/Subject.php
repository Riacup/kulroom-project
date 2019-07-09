<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    public function notes()
    {
        return $this->hasMany(Note::class, 'subject_id');
    }
}
