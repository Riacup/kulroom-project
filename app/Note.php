<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function owner()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }
}
