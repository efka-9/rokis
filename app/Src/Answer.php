<?php

namespace App\Src;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question()
    {
        return $this->belongsTo(\App\Src\Question::class);
    }
}
